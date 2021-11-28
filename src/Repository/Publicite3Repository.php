<?php

namespace App\Repository;

use App\Entity\Publicite3;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Publicite3|null find($id, $lockMode = null, $lockVersion = null)
 * @method Publicite3|null findOneBy(array $criteria, array $orderBy = null)
 * @method Publicite3[]    findAll()
 * @method Publicite3[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Publicite3Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Publicite3::class);
    }

    // /**
    //  * @return Publicite3[] Returns an array of Publicite3 objects
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
    public function findOneBySomeField($value): ?Publicite3
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
