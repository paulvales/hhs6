<?php

namespace App\Repository;

use App\Entity\Permissions;
use App\Entity\Roles;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\Query;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\User;

/**
 * @method Permissions|null find($id, $lockMode = null, $lockVersion = null)
 * @method Permissions|null findOneBy(array $criteria, array $orderBy = null)
 * @method Permissions[]    findAll()
 * @method Permissions[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PermissionsRepository extends ServiceEntityRepository
{
    public $scopes = [
        'user'   => 'Сотрудники',
        'admin'  => 'Админ-панель',
        'flat'   => 'Квартиры',
        'client' => 'Клиенты',
    ];

    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Permissions::class);
    }

    public function findWithRoles($groupBy = 'scope')
    {
        $roles = $this->getEntityManager()->createQueryBuilder()
            ->select('r')
            ->from(Roles::class, 'r')
            ->getQuery()
            ->getArrayResult();

        $permissions = $this->asArray();

        $out = [];
        foreach ($roles as $role) {
            foreach ($permissions as $perm) {
                $perm['active'] = in_array($perm['name'], ($role['permissions'] ?: []));
                $out[$role['name']][$perm['scope']][] = $perm;
            }
        }

        return $out;
    }

    public function fetchUserPermissions($username)
    {
        /**@var User $user * */
        $user = $this->getEntityManager()->createQueryBuilder('u')
            ->select('u')
            ->from(User::class, 'u')
            ->andWhere('u.username = :val')
            ->setParameter('val', $username)
            ->getQuery()
            ->getOneOrNullResult();
        $permissions = $this->asArray();

        $out = [];

//        var_dump($user); die();
        foreach ($permissions as $perm) {
            $perm['active'] = in_array($perm['name'], $user->getPermissions());
            $out[$user->username][$perm['scope']][] = $perm;
        }


        return $out;
    }

    public function findWithUsers($groupBy = 'scope')
    {
        $users = $this->getEntityManager()->createQueryBuilder()
            ->select('u')
            ->from(User::class, 'u')
            ->getQuery()
            ->getArrayResult();

        $permissions = $this->asArray();

        $out = [];
        foreach ($users as $user) {
            foreach ($permissions as $perm) {
                $perm['active'] = in_array($perm['name'], ($user['permissions'] ?: []));
                $out[$user['name']][$perm['scope']][] = $perm;
            }
        }

        return $out;
    }

    public function asArray()
    {
        return $this->getEntityManager()->createQueryBuilder()
            ->select('p')
            ->from(Permissions::class, 'p')
            ->getQuery()
            ->getArrayResult();
    }




    // /**
    //  * @return Permissions[] Returns an array of Permissions objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Permissions
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
    /**
     * @return string[]
     */
    public function getScopes(): array
    {
        return $this->scopes;
    }
}
