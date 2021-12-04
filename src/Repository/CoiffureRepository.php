<?php

namespace App\Repository;

use App\Entity\Coiffure;
use App\Data\SearchData1;
use App\Repository\CoiffureRepository;
use Doctrine\Persistence\ManagerRegistry;
use Knp\Component\Pager\PaginatorInterface;
use Knp\Component\Pager\Pagination\PaginationInterface;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

/**
 * @method Coiffure|null find($id, $lockMode = null, $lockVersion = null)
 * @method Coiffure|null findOneBy(array $criteria, array $orderBy = null)
 * @method Coiffure[]    findAll()
 * @method Coiffure[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CoiffureRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry, PaginatorInterface $paginator )
    {
        parent::__construct($registry, Coiffure::class);
        $this->paginator = $paginator;
    }

    /**
     * Résoudre les cours en lien avec une recherche
     * @return PaginationInterface
     */

    public function findSearch1(SearchData1 $search): PaginationInterface
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
