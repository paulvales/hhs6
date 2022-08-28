<?php

namespace App\Controller\Admin;

use App\Controller\BaseController;
use App\Entity\Flats;
use App\Entity\Region;
use App\Entity\Roles;
use App\Entity\User;
use App\Repository\FlatsRepository;
use App\Repository\PartnersRepository;
use App\Repository\PermissionsRepository;
use App\Repository\RegionRepository;
use App\Repository\RolesRepository;
use App\Repository\SettingRepository;
use App\Repository\UserRepository;
use Psr\Log\LoggerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

/**
 * Class AdminController
 *
 * @package App\Controller\admin
 * @IsGranted("ROLE_ADMIN")
 */
class AdminController extends BaseController
{
    /**
     * @param UserRepository  $userRepository
     * @param FlatsRepository $flatsRepository
     *
     * @return Response
     */
    #[Route(path: '/admin', name: 'admin_index')]
    public function index(UserRepository $userRepository, FlatsRepository $flatsRepository)
    {
        return $this->render(
            'admin/admin.html.twig',
            [
                'count_users'    => $userRepository->count(['hide' => 0]),
                'count_flats'    => $flatsRepository->count(['hidden' => 0]),
                'count_partners' => 0,
            ]
        );
    }

    /**
     * @Route("/users", name="admin_users")
     * @param UserRepository     $userRepository
     * @param PartnersRepository $partnersRepository
     * @param RolesRepository    $rolesRepository
     *
     * @return Response
     */
    public function users(
        UserRepository $userRepository,
        PartnersRepository $partnersRepository,
        RolesRepository $rolesRepository
    ): Response {
//        $b = array_map(
//            static function ($array) {
//                return [$array->getId() => $array];
//            },
//            $userRepository->findAll()
//        );

        $users = $userRepository->findAll();
        $usersForJson = [];
        foreach ($users as $key => $value) {
            $usersForJson[$value->getId()] = $value;
        }

        return $this->render(
            'admin/users.html.twig',
            [
                'users'     => $users,
                'partners'  => $partnersRepository->findAll(),
                'roles'     => $rolesRepository->findAll(),
                'usersJSON' => json_encode($usersForJson),
            ]
        );
    }

    /**
     * @Route("/save-user", name="admin_save_user")
     * @param Request                      $request
     * @param UserRepository               $userRepository
     * @param RolesRepository              $rolesRepository
     * @param UserPasswordEncoderInterface $passwordEncoder
     * @param LoggerInterface              $logger
     *
     * @return JsonResponse
     * @IsGranted("USERS_EDIT")
     */
    public function saveUser(
        Request $request,
        UserRepository $userRepository,
        RolesRepository $rolesRepository,
        UserPasswordEncoderInterface $passwordEncoder,
        LoggerInterface $logger
    ): ?JsonResponse {
        try {
            $data = $request->request->all();
            if ($data['id'] ?? false) {
                $user = $userRepository->find($data['id']);
            } else {
                $user = new User();
            }
            $user->setName($data['name']);

            $user->updatePermissions($rolesRepository, explode(',', $data['roles']));

            $user->setPhone($data['phone']);
            $user->setBirth($data['birth']);

            $dtEnd = $user->getDtend() ? ($user->getDtend())->format('Y-m-d H:i:s') : date('Y-m-d H:i:s');
            $dtEnd = $data['dtend'] ? $dtEnd : null;
            $user->setDtend($dtEnd);

            $user->setUsername($data['username']);
            if ($data['password']) {
                $user->setPassword(
                    $passwordEncoder->encodePassword(
                        $user,
                        $data['password']
                    )
                );
            }
            $user->setPartner($data['partner']);

            $this->save($user);

            return new JsonResponse(true);
        } catch (\Exception $e) {
            $logger->error($e->getLine() . ' ' . $e->getMessage() . ' ' . $e->getTraceAsString(), [$data ?? []]);

            return new JsonResponse(false);
        }
    }

    /**
     * @Route("/permissions", name="admin_permissions")
     * @param RolesRepository       $rolesRepository
     * @param PermissionsRepository $permissionsRepository
     *
     * @param UserRepository        $userRepository
     *
     * @return Response
     */
    public function permissions(
        RolesRepository $rolesRepository,
        PermissionsRepository $permissionsRepository,
        UserRepository $userRepository
    ): Response {
        return $this->render(
            'admin/permissions.html.twig',
            [
                'roles'             => $rolesRepository->findAll(),
                'scopes'            => $permissionsRepository->getScopes(),
                'permissions_roles' => $permissionsRepository->findWithRoles(),
                'users'             => $userRepository->findAll(),
                'permissions_users' => $permissionsRepository->findWithUsers(),
            ]
        );
    }

    /**
     * @Route("/save-role-permissions", name="admin_save_role_permissions")
     * @param Request         $request
     * @param RolesRepository $rolesRepository
     *
     * @param UserRepository  $userRepository
     *
     * @return JsonResponse|null
     */
    public function saveRolePermissions(
        Request $request,
        RolesRepository $rolesRepository,
        UserRepository $userRepository
    ): ?JsonResponse {
        if ($request->isXmlHttpRequest()) {
            $data = $request->request->all();
            foreach ($data as $roleName => $permissions) {
                $product = $rolesRepository->find($roleName);
                if ($product) {
                    $product->setPermissions($permissions);
                    $this->save($product);

                    //обновление доступов у юзеров с этой ролью
                    $usersWithThisRole = $userRepository->findUsersByRole($roleName);
                    /**@var User $userWithThisRole * */
                    foreach ($usersWithThisRole as $userWithThisRole) {
                        $userWithThisRole->updatePermissions($rolesRepository);
                        $this->save($userWithThisRole);
                    }
                }
            }
        }

        return new JsonResponse(true);
    }

    /**
     * @Route("/save-user-permissions", name="admin_save_user_permissions")
     * @param Request        $request
     * @param UserRepository $userRepository
     *
     * @return JsonResponse|null
     */
    public function saveUserPermissions(Request $request, UserRepository $userRepository): ?JsonResponse
    {
        if ($request->isXmlHttpRequest()) {
            $userName = $request->request->get('userName');
            $permissions = $request->request->get('permissions');
            $em = $this->em();
            $user = $userRepository->findBy(
                [
                    'username' => $userName,
                ]
            );

            if ($user) {
                $user[0]->setPermissions($permissions);
                $em->flush();
            } else {
                return new JsonResponse(false);
            }
        }

        return new JsonResponse(true);
    }

    /**
     * @Route("/find-user", name="admin_find_user")
     * @param Request        $request
     * @param UserRepository $userRepository
     *
     * @return JsonResponse
     */
    public function findUser(Request $request, UserRepository $userRepository): JsonResponse
    {
        $name = $request->query->get('name');
        $users = $userRepository->findNameLike($name);

        return new JsonResponse(['results' => $users]);
    }

    /**
     * @Route("/get-user-permissions", name="admin_get_user_permissions")
     * @param Request               $request
     * @param PermissionsRepository $permissionsRepository
     *
     * @return JsonResponse
     */
    public function getUserPermissions(Request $request, PermissionsRepository $permissionsRepository): JsonResponse
    {
        $userName = $request->query->get('userName');
        $userPermissions = $permissionsRepository->fetchUserPermissions($userName);


        return new JsonResponse(
            $this->render(
                'admin/permissions_right_side.html.twig',
                [
                    'userName'    => $userName,
                    'scopes'      => $permissionsRepository->getScopes(),
                    'permissions' => $userPermissions,
                ]
            )->getContent()
        );
    }

    /**
     * @Route("/flats", name="admin_flats")
     * @param PartnersRepository $partnersRepository
     *
     * @return Response
     */
    public function flats(
        PartnersRepository $partnersRepository
    ): Response {
        return $this->render(
            'admin/flats.html.twig',
            [
                'partners' => $partnersRepository->findAll(),
            ]
        );
    }

    /**
     * @Route("/get-flats", name="admin_get_flats")
     * @param FlatsRepository $flatsRepository
     *
     * @return JsonResponse
     */
    public function getFlats(FlatsRepository $flatsRepository): JsonResponse
    {
        $flats = $flatsRepository->findAllArray();
//        $flatsForJson = [];
//        foreach ($flats as $key => $value) {
//            $flatsForJson[$value->id] = $value;
//        }


        return new JsonResponse($flats);
    }
//

    /**
     * @Route("/save-flat", name="admin_save_flat")
     * @param Request         $request
     * @param FlatsRepository $flatsRepository
     * @param LoggerInterface $logger
     *
     * @return JsonResponse
     * @IsGranted("FLATS_EDIT")
     */
    public function saveFlat(
        Request $request,
        FlatsRepository $flatsRepository,
        LoggerInterface $logger
    ): ?JsonResponse {
        try {
            $data = $request->request->all();
            if ($data['id'] ?? false) {
                $flat = $flatsRepository->find($data['id']);
            } else {
                $flat = new Flats();
            }
            $flat->setAdres($data['adres']);
            $flat->setPhone($data['phone']);
            $flat->setAdresSms($data['adresSms']);
            $flat->setDescr($data['descr']);
            $flat->setKom($data['kom']);
            $flat->setPartner($data['partner']);
            $flat->setPriceday($data['priceday']);
            $flat->setRegion($data['region']);
            $flat->setHidden($data['hidden']);
            $flat->setIdSite($data['idSite']);

            $this->save($flat);
            $logger->info('Редактирование квартиры', [$flat->adres, $this->getUser()->getUsername()]);

            return new JsonResponse(true);
        } catch (\Exception $e) {
            $logger->error($e->getLine() . ' ' . $e->getMessage() . ' ' . $e->getTraceAsString(), [$data ?? []]);

            return new JsonResponse(false);
        }
    }

    /**
     * @Route("/settings", name="admin_settings")
     * @return Response
     */
    public function settings(): Response
    {
        $settings = $this->getItems('setting');
        $regions = $this->getItems('region');
        $checklist = $this->getItems('checklist');
        $tagsFlat = $this->getItems('tagsFlat');
        $tagsRepair = $this->getItems('tagsRepair');

        return $this->render(
            'admin/settings.html.twig',
            [
                'settings'   => $settings,
                'regions'    => $regions,
                'checklist'  => $checklist,
                'tagsFlat'   => $tagsFlat,
                'tagsRepair' => $tagsRepair,
            ]
        );
    }


}