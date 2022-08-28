<?php

namespace App\Repository;

use App\Entity\TagsRepair;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TagsRepair|null find($id, $lockMode = null, $lockVersion = null)
 * @method TagsRepair|null findOneBy(array $criteria, array $orderBy = null)
 * @method TagsRepair[]    findAll()
 * @method TagsRepair[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TagsRepairRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TagsRepair::class);
    }

    // /**
    //  * @return TagsRepair[] Returns an array of TagsRepair objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TagsRepair
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
