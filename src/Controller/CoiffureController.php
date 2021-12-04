<?php

namespace App\Controller;

use App\Data\SearchData1;
use App\Entity\Coiffure;
use App\Form\SearchForm1;
use App\Repository\CoiffureRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CoiffureController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager ){
        $this->entityManager = $entityManager;
    }
    /**
     * @Route("/coiffure", name="coiffure")
    */
    public function index(Request $request, PaginatorInterface $paginator, CoiffureRepository $repository): Response
    {   
        //pagination
        $donnees = $this->entityManager->getRepository(Coiffure::class)->findAll();

        $coiffure = $paginator->paginate(
            $donnees, //on passe les donnees
            $request->query->getInt('page', 1),//numero de la page en cour ,1 par defaut
            10
        );
        
       
       
         //search

        $data = new SearchData1();
        $data->page = $request->get('page', 1);
        $form = $this->createForm(SearchForm1::class, $data);
        $form->handleRequest($request);

        $coiffure = $repository->findSearch1($data);




    
    

  
        return $this->render('coiffure/index.html.twig', [
            'coiffure' => $coiffure,
            'form' => $form->createView()
        ]);
    }
}
