<?php

namespace App\Controller;

use App\Data\SearchData8;
use App\Form\SearchForm8;
use App\Entity\VoyageDeNoce;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\VoyageDeNoceRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class VoyageDeNoceController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager ){
        $this->entityManager = $entityManager;
    }
    /**
     * @Route("/voyage/de/noce", name="voyage_de_noce")
     */
    public function index(Request $request, PaginatorInterface $paginator, VoyageDeNoceRepository $repository): Response
    {   
        //pagination
        $donnees = $this->entityManager->getRepository(VoyageDeNoce::class)->findAll();

        $voyagedenoce= $paginator->paginate(
            $donnees, //on passe les donnees
            $request->query->getInt('page', 1),//numero de la page en cour ,1 par defaut
            10
        );
        
       
       
         //search

        $data = new SearchData8();
        $data->page = $request->get('page', 1);
        $form = $this->createForm(SearchForm8::class, $data);
        $form->handleRequest($request);

        $voyagedenoce = $repository->findSearch8($data);




    
    

  
  

   

    

  

        return $this->render('voyage_de_noce/index.html.twig', [
            'voyagedenoce' => $voyagedenoce,
            'form' => $form->createView()
        ]);
    }
}
