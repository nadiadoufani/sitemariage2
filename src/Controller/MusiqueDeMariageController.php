<?php

namespace App\Controller;

use App\Data\SearchData4;
use App\Form\SearchForm4;
use App\Entity\MusiqueDeMariage;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\MusiqueDeMariageRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MusiqueDeMariageController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager ){
        $this->entityManager = $entityManager;
    }
    /**
     * @Route("/musique/de/mariage", name="musique_de_mariage")
     */
    public function index(Request $request, PaginatorInterface $paginator, MusiqueDeMariageRepository $repository): Response
    {   
        //pagination
        $donnees = $this->entityManager->getRepository(MusiqueDeMariage::class)->findAll();

        $musiquedemariage = $paginator->paginate(
            $donnees, //on passe les donnees
            $request->query->getInt('page', 1),//numero de la page en cour ,1 par defaut
            10
        );
        
       
       
         //search

        $data = new SearchData4();
        $data->page = $request->get('page', 1);
        $form = $this->createForm(SearchForm4::class, $data);
        $form->handleRequest($request);

        $musiquedemariage = $repository->findSearch4($data);




    
    

  
  

   

        return $this->render('musique_de_mariage/index.html.twig', [
            'musiquedemariage' => $musiquedemariage,
            'form' => $form->createView()
        ]);
    }
}
