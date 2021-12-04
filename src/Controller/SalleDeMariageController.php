<?php

namespace App\Controller;

use App\Data\SearchData;
use App\Form\SearchForm;
use App\Entity\Traiteurs;
use App\Entity\CentreDeBeaute;
use App\Entity\PropertySearch;
use App\Entity\SalleDeMariage;
use App\Form\PropertySearchType;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use App\Repository\SalleDeMariageRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SalleDeMariageController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager ){
        $this->entityManager = $entityManager;
    }
    

    /**
     * @Route("/salle/de/mariage", name="salle_de_mariage")
     */
    public function index(Request $request, PaginatorInterface $paginator, SalleDeMariageRepository $repository): Response
    {   
        //pagination
        $donnees = $this->entityManager->getRepository(SalleDeMariage::class)->findAll();

        $salledemariage = $paginator->paginate(
            $donnees, //on passe les donnees
            $request->query->getInt('page', 1),//numero de la page en cour ,1 par defaut
            10
        );
        
       
       
         //search

        $data = new SearchData();
        $data->page = $request->get('page', 1);
        $form = $this->createForm(SearchForm::class, $data);
        $form->handleRequest($request);

        $salledemariage = $repository->findSearch($data);




    
        return $this->render('salle_de_mariage/index.html.twig', [
            'salledemariage' => $salledemariage,
            'form' => $form->createView()
        ]);
    }

  
}
