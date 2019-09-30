<?php

namespace App\Repository;

use App\Entity\Motions;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Motions|null find($id, $lockMode = null, $lockVersion = null)
 * @method Motions|null findOneBy(array $criteria, array $orderBy = null)
 * @method Motions[]    findAll()
 * @method Motions[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MotionsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Motions::class);
    }

    // /**
    //  * @return Motions[] Returns an array of Motions objects
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
    public function findOneBySomeField($value): ?Motions
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
