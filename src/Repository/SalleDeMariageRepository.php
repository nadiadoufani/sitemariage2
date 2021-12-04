<?php

namespace App\Repository;

use App\Data\SearchData;
use App\Entity\SalleDeMariage;
use Knp\Component\Pager\PaginatorInterface;
use Doctrine\Persistence\ManagerRegistry;
use Knp\Component\Pager\Pagination\PaginationInterface;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

/**
 * @method SalleDeMariage|null find($id, $lockMode = null, $lockVersion = null)
 * @method SalleDeMariage|null findOneBy(array $criteria, array $orderBy = null)
 * @method SalleDeMariage[]    findAll()
 * @method SalleDeMariage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SalleDeMariageRepository extends ServiceEntityRepository
{
    
    public function __construct(ManagerRegistry $registry, PaginatorInterface $paginator )
    {
        parent::__construct($registry, SalleDeMariage::class);
        $this->paginator = $paginator;
    }

    /**
     * Résoudre les cours en lien avec une recherche
     * @return PaginationInterface
     */

    public function findSearch(SearchData $search): PaginationInterface
    {
        $query = $this
         ->createQueryBuilder('p')
         ->select('c','p')
         ->join('p.categorie', 'c');

         if (!empty($search->q)) {
            $query = $query
                ->andWhere('p.nom LIKE :q')
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



        if (!empty($search->categorie)) {
            $query = $query
                ->andWhere('c.id IN (:categorie)')
                ->setParameter('categorie', $search->categorie);
        }

        $query = $query->getQuery();
        return $this->paginator->paginate(
            $query,
            $search->page,
           12
        );
    }


}