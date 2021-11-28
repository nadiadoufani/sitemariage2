<?php

namespace App\Repository;

use App\Entity\Publicite1;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Publicite1|null find($id, $lockMode = null, $lockVersion = null)
 * @method Publicite1|null findOneBy(array $criteria, array $orderBy = null)
 * @method Publicite1[]    findAll()
 * @method Publicite1[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Publicite1Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Publicite1::class);
    }

    // /**
    //  * @return Publicite1[] Returns an array of Publicite1 objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Publicite1
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
