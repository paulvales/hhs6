<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Repository;

use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * This custom Doctrine repository is empty because so far we don't need any custom
 * method to query for application user information. But it's always a good practice
 * to define a custom repository that will be used when the application grows.
 *
 * See https://symfony.com/doc/current/doctrine.html#querying-for-objects-the-repository
 *
 * @author Ryan Weaver <weaverryan@gmail.com>
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
class UserRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, User::class);
    }

    public function findUsernameLike($value)
    {
        return $this->createQueryBuilder('u')
                    ->andWhere('u.username LIKE :val')
                    ->setParameter('val', '%' . $value . '%')
                    ->setMaxResults(10)
                    ->getQuery()
                    ->getArrayResult();
    }

    public function findNameLike($value)
    {
        return $this->createQueryBuilder('u')
                    ->andWhere('u.name LIKE :val')
                    ->setParameter('val', '%' . $value . '%')
                    ->setMaxResults(10)
                    ->getQuery()
                    ->getArrayResult();
    }

    public function findUsersByRole($role)
    {
        return $this->createQueryBuilder('u')
                    ->where('u.roles LIKE :rol')
                    ->setParameter('rol', '%"' . $role . '"%')
                    ->getQuery()
                    ->getResult();
    }
}
