<?php

namespace App\Repository;

use App\Data\SearchData2;
use App\Entity\CentreDeBeaute;
use Doctrine\Persistence\ManagerRegistry;
use Knp\Component\Pager\PaginatorInterface;
use App\Repository\CentreDeBeauteRepository;
use Knp\Component\Pager\Pagination\PaginationInterface;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

/**
 * @method CentreDeBeaute|null find($id, $lockMode = null, $lockVersion = null)
 * @method CentreDeBeaute|null findOneBy(array $criteria, array $orderBy = null)
 * @method CentreDeBeaute[]    findAll()
 * @method CentreDeBeaute[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CentreDeBeauteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry, PaginatorInterface $paginator )
    {
        parent::__construct($registry, CentreDeBeaute::class);
        $this->paginator = $paginator;
    }

    /**
     * Résoudre les cours en lien avec une recherche
     * @return PaginationInterface
     */

    public function findSearch2(SearchData2 $search): PaginationInterface
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
