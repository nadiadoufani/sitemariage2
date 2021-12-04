<?php

namespace App\Controller;

use App\Entity\Costume;
use App\Data\SearchData3;
use App\Form\SearchForm3;
use App\Controller\CostumeController;
use App\Repository\CostumeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CostumeController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager ){
        $this->entityManager = $entityManager;
    }
    /**
     * @Route("/costume", name="costume")
     */
    public function index(Request $request, PaginatorInterface $paginator, CostumeRepository $repository): Response
    {   
        //pagination
        $donnees = $this->entityManager->getRepository(Costume::class)->findAll();

        $costume = $paginator->paginate(
            $donnees, //on passe les donnees
            $request->query->getInt('page', 1),//numero de la page en cour ,1 par defaut
            10
        );
        
       
       
         //search

        $data = new SearchData3();
        $data->page = $request->get('page', 1);
        $form = $this->createForm(SearchForm3::class, $data);
        $form->handleRequest($request);

        $costume = $repository->findSearch3($data);




    
    

  
  

        return $this->render('costume/index.html.twig', [
            'costume' => $costume,
            'form' => $form->createView()
        ]);
    }
}
