<?php

namespace App\Controller;

use App\Data\SearchData2;
use App\Form\SearchForm2;
use App\Entity\CentreDeBeaute;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use App\Repository\CentreDeBeauteRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CentreDeBeauteController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager ){
        $this->entityManager = $entityManager;
    }
    /**
     * @Route("/centre/de/beaute", name="centre_de_beaute")
     */
    public function index(Request $request, PaginatorInterface $paginator, CentreDeBeauteRepository $repository): Response
    {   
        //pagination
        $donnees = $this->entityManager->getRepository(CentreDeBeaute::class)->findAll();

        $centredebeaute = $paginator->paginate(
            $donnees, //on passe les donnees
            $request->query->getInt('page', 1),//numero de la page en cour ,1 par defaut
            10
        );
        
       
       
         //search

        $data = new SearchData2();
        $data->page = $request->get('page', 1);
        $form = $this->createForm(SearchForm2::class, $data);
        $form->handleRequest($request);

        $centredebeaute = $repository->findSearch2($data);




    
    

  
              return $this->render('centre_de_beaute/index.html.twig', [
            'centredebeaute' => $centredebeaute,
            'form' => $form->createView()
        ]);
    }
}
