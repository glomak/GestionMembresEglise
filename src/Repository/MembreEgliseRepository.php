<?php

namespace App\Repository;

use App\Entity\MembreEglise;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method MembreEglise|null find($id, $lockMode = null, $lockVersion = null)
 * @method MembreEglise|null findOneBy(array $criteria, array $orderBy = null)
 * @method MembreEglise[]    findAll()
 * @method MembreEglise[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MembreEgliseRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MembreEglise::class);
    }

    // /**
    //  * @return MembreEglise[] Returns an array of MembreEglise objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?MembreEglise
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
