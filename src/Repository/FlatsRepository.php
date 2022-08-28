<?php

namespace App\Repository;

use App\Entity\Flats;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Flats|null find($id, $lockMode = null, $lockVersion = null)
 * @method Flats|null findOneBy(array $criteria, array $orderBy = null)
 * @method Flats[]    findAll()
 * @method Flats[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FlatsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Flats::class);
    }

    public function findAllArray(): array
    {

        return $this->createQueryBuilder('f')
            ->select('f, p')
            ->leftJoin('f.partnerObject', 'p', 'WITH', 'p.id = f.partner')
            ->getQuery()->execute();
//        $query = $this->getEntityManager()
//            ->createQuery(
//                'SELECT f, p FROM AppBundle:Product p
//            JOIN p.category c
//            WHERE p.id = :id'
//            );
//
//        return $query->execute();
    }

    // /**
    //  * @return Flats[] Returns an array of Flats objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Flats
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

}
