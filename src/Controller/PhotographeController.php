<?php

namespace App\Controller;

use App\Data\SearchData7;
use App\Form\SearchForm7;
use App\Entity\Photographe;
use App\Entity\SalleDeMariage;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\PhotographeRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PhotographeController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager ){
        $this->entityManager = $entityManager;
    }
    /**
     * @Route("/photographe", name="photographe")
     */
    public function index(Request $request, PaginatorInterface $paginator, PhotographeRepository $repository): Response
    {   
        //pagination
        $donnees = $this->entityManager->getRepository(Photographe::class)->findAll();

        $photographe= $paginator->paginate(
            $donnees, //on passe les donnees
            $request->query->getInt('page', 1),//numero de la page en cour ,1 par defaut
            10
        );
        
       
       
         //search

        $data = new SearchData7();
        $data->page = $request->get('page', 1);
        $form = $this->createForm(SearchForm7::class, $data);
        $form->handleRequest($request);

        $photographe = $repository->findSearch7($data);




    
    

  
  

   

    

        return $this->render('photographe/index.html.twig', [
            'photographe' => $photographe,
            'form' => $form->createView()
        ]);
    }
    
}
