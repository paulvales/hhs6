<?php


namespace App\Controller\client;


use App\Controller\BaseController;
use App\Entity\Client;
use App\Repository\ClientRepository;
use App\Repository\OrdersRepository;
use App\Repository\UserRepository;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ClientController extends BaseController
{
    /**
     * @Route("/client/{idClient}", name="client_page")
     * @param ClientRepository $clientRepository
     * @param OrdersRepository $ordersRepository
     * @param UserRepository   $userRepository
     * @param null             $idClient
     *
     * @return Response
     */
    public function clientPage(
        ClientRepository $clientRepository,
        OrdersRepository $ordersRepository,
        UserRepository $userRepository,
        $idClient = null
    ): Response {
        if ($idClient) {
            $client = $clientRepository->find($idClient);
            $orders = $ordersRepository->findBy(['idclient' => $idClient]);
        }

        $operators = $userRepository->findUsersByRole('ROLE_OPERATOR');


        return $this->render(
            'client/page.html.twig',
            [
                'client'    => $client ?? new Client,
                'orders'    => $orders ?? [],
                'operators' => $operators ?? [],
            ]
        );
    }

    /**
     * @param ClientRepository $clientRepository
     * @param string           $field
     * @param                  $query
     *
     * @return JsonResponse
     */
    #[Route(path: '/client-search/{field}/{query}', name: 'client_search', methods: ['GET'])]
    public function clientSearch(ClientRepository $clientRepository, $field = 'fio', $query = null): JsonResponse
    {
        $result = $clientRepository->searchON($query, $field);

        return $this->json($result);
    }

    /**
     * @Route("/client-save", name="client_save")
     * @param Request          $request
     * @param ClientRepository $clientRepository
     *
     * @param LoggerInterface  $logger
     *
     * @return JsonResponse
     */
    public function clientSave(
        Request $request,
        ClientRepository $clientRepository,
        LoggerInterface $logger
    ): JsonResponse {
        try {
            $data = $request->request->all();
            if ($data['id'] ?? false) {
                $client = $clientRepository->find($data['id']);
            } else {
                $client = new Client();
            }

            foreach ($data as $field => $val) {
                if ($field === 'photo' && $val) {
                    $newPhoto = $_SERVER['IMG_DOCS_PATH'] . 'p-' . date('d-m-Y_H_i_s') . '.jpg';
                    if ($client->photo) {
                        if (file_exists($_SERVER['DOCUMENT_ROOT'] . $client->photo)) {
                            unlink($_SERVER['DOCUMENT_ROOT'] . $client->photo);
                        }
                    }
                    $client->photo = $this->base64ToJpeg($data['photo'], $newPhoto);
                    continue;
                }
                $client->{$field} = $val;
            }

            $client->upd = $this->getUser()->getId();
            $this->save($client);

            $logger->info('Редактирование клиента', [$client->iin, $this->getUser()->getUsername()]);

            return $this->json(true);
        } catch (\Exception $e) {
            $logger->error($e->getLine() . ' ' . $e->getMessage() . ' ' . $e->getTraceAsString(), [$data ?? []]);

            return new JsonResponse(false);
        }
    }
}