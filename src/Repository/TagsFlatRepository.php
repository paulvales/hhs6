<?php

namespace App\Repository;

use App\Entity\TagsFlat;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TagsFlat|null find($id, $lockMode = null, $lockVersion = null)
 * @method TagsFlat|null findOneBy(array $criteria, array $orderBy = null)
 * @method TagsFlat[]    findAll()
 * @method TagsFlat[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TagsFlatRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TagsFlat::class);
    }

    // /**
    //  * @return TagsFlat[] Returns an array of TagsFlat objects
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
    public function findOneBySomeField($value): ?TagsFlat
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
