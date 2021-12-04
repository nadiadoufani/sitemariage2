<?php

namespace App\Controller;

use App\Data\SearchData5;
use App\Entity\Traiteurs;
use App\Form\SearchForm5;
use App\Repository\TraiteursRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TraiteursController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager ){
        $this->entityManager = $entityManager;
    }
    /**
     * @Route("/traiteurs", name="traiteurs")
     */
    public function index(Request $request, PaginatorInterface $paginator, TraiteursRepository $repository): Response
    {   
        //pagination
        $donnees = $this->entityManager->getRepository(Traiteurs::class)->findAll();

        $traiteurs = $paginator->paginate(
            $donnees, //on passe les donnees
            $request->query->getInt('page', 1),//numero de la page en cour ,1 par defaut
            10
        );
        
       
       
         //search

        $data = new SearchData5();
        $data->page = $request->get('page', 1);
        $form = $this->createForm(SearchForm5::class, $data);
        $form->handleRequest($request);

        $traiteurs = $repository->findSearch5($data);




    
    

  
  

   

       
        return $this->render('traiteurs/index.html.twig', [
            'traiteurs' => $traiteurs,
            'form' => $form->createView()
        ]);
    }
}
