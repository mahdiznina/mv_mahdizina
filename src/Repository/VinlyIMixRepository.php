<?php

namespace App\Repository;

use App\Entity\VinlyIMix;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<VinlyIMix>
 *
 * @method VinlyIMix|null find($id, $lockMode = null, $lockVersion = null)
 * @method VinlyIMix|null findOneBy(array $criteria, array $orderBy = null)
 * @method VinlyIMix[]    findAll()
 * @method VinlyIMix[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VinlyIMixRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, VinlyIMix::class);
    }

    //    /**
    //     * @return VinlyIMix[] Returns an array of VinlyIMix objects
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

    //    public function findOneBySomeField($value): ?VinlyIMix
    //    {
    //        return $this->createQueryBuilder('v')
    //            ->andWhere('v.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
