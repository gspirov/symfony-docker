<?php

namespace App\Repository;

use App\Entity\FriendshipStatus;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method FriendshipStatus|null find($id, $lockMode = null, $lockVersion = null)
 * @method FriendshipStatus|null findOneBy(array $criteria, array $orderBy = null)
 * @method FriendshipStatus[]    findAll()
 * @method FriendshipStatus[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FriendshipStatusRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FriendshipStatus::class);
    }

    // /**
    //  * @return FriendshipStatus[] Returns an array of FriendshipStatus objects
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
    public function findOneBySomeField($value): ?FriendshipStatus
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
