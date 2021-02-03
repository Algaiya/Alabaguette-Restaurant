<?php

namespace App\Repository;

use App\Entity\RelationProductCategory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method RelationProductCategory|null find($id, $lockMode = null, $lockVersion = null)
 * @method RelationProductCategory|null findOneBy(array $criteria, array $orderBy = null)
 * @method RelationProductCategory[]    findAll()
 * @method RelationProductCategory[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RelationProductCategoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RelationProductCategory::class);
    }

    // /**
    //  * @return RelationProductCategory[] Returns an array of RelationProductCategory objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?RelationProductCategory
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
