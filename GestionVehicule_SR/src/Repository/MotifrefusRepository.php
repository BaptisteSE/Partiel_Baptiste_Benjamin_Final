<?php

namespace App\Repository;

use App\Entity\Motifrefus;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Motifrefus|null find($id, $lockMode = null, $lockVersion = null)
 * @method Motifrefus|null findOneBy(array $criteria, array $orderBy = null)
 * @method Motifrefus[]    findAll()
 * @method Motifrefus[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MotifrefusRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Motifrefus::class);
    }

    // /**
    //  * @return Motifrefus[] Returns an array of Motifrefus objects
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
    public function findOneBySomeField($value): ?Motifrefus
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
