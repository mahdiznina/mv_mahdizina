<?php

namespace App\Repository;

use App\Entity\VinyImix;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<VinyImix>
 *
 * @method VinyImix|null find($id, $lockMode = null, $lockVersion = null)
 * @method VinyImix|null findOneBy(array $criteria, array $orderBy = null)
 * @method VinyImix[]    findAll()
 * @method VinyImix[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VinyImixRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, VinyImix::class);
    }

    //    /**
    //     * @return VinyImix[] Returns an array of VinyImix objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('v')
    //            ->andWhere('v.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('v.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?VinyImix
    //    {
    //        return $this->createQueryBuilder('v')
    //            ->andWhere('v.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
