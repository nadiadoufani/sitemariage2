<?php

namespace App\Controller;

use App\Entity\Publicite;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PubliciteController extends AbstractController
{ 
    /**
    * @Route("/publicite", name="publicite")
    */
   public function index(): Response
   {
       return $this->render('publicite/index.html.twig', [
           'controller_name' => 'PubliciteController',
       ]);
   
}
   
}
