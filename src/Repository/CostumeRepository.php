<?php

namespace App\Repository;

use App\Entity\Costume;
use App\Data\SearchData3;
use App\Repository\CostumeRepository;
use Doctrine\Persistence\ManagerRegistry;
use Knp\Component\Pager\PaginatorInterface;
use Knp\Component\Pager\Pagination\PaginationInterface;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

/**
 * @method Costume|null find($id, $lockMode = null, $lockVersion = null)
 * @method Costume|null findOneBy(array $criteria, array $orderBy = null)
 * @method Costume[]    findAll()
 * @method Costume[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CostumeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry, PaginatorInterface $paginator )
    {
        parent::__construct($registry, Costume::class);
        $this->paginator = $paginator;
    }

    /**
     * Résoudre les cours en lien avec une recherche
     * @return PaginationInterface
     */

    public function findSearch3(SearchData3 $search): PaginationInterface
    {
        $query = $this
         ->createQueryBuilder('p');
         
         

         if (!empty($search->q)) {
            $query = $query
                ->andWhere('p.emplacement LIKE :q')
                ->setParameter('q', "%{$search->q}%");
        }

        if (!empty($search->min)) {
            $query = $query
                ->andWhere('p.prix >= :min')
                ->setParameter('min', $search->min);
        }

        if (!empty($search->max) ) {
            $query = $query
                ->andWhere('p.prix <= :max')
                ->setParameter('max', $search->max);
        }



        

        $query = $query->getQuery();
        return $this->paginator->paginate(
            $query,
            $search->page,
           12
        );
    }


}
