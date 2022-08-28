<?php


namespace App\Repository;


use App\Entity\Client;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Client|null find($id, $lockMode = null, $lockVersion = null)
 * @method Client|null findOneBy(array $criteria, array $orderBy = null)
 * @method Client[]    findAll()
 * @method Client[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClientRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Client::class);
    }

    public function shortVersion()
    {
        return $this->createQueryBuilder('c')
            ->select('c.id, c.fio, c.phone, c.iin')
            ->getQuery()->getArrayResult();
    }

    public function searchON($query, $field)
    {
        return $this->createQueryBuilder('c')
            ->select('c')
            ->where("c.$field LIKE :query")
            ->setParameter('query', '%' . $query . '%')
            ->setMaxResults(5)
            ->getQuery()->getArrayResult();
    }
}