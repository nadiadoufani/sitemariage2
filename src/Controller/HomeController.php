<?php

namespace App\Controller;

use App\Entity\Coiffure;
use App\Entity\Publicite;
use App\Entity\Traiteurs;
use App\Entity\Publicite1;
use App\Entity\Publicite3;
use App\Entity\Photographe;
use App\Entity\VoyageDeNoce;
use App\Entity\CentreDeBeaute;
use App\Entity\SalleDeMariage;
use App\Entity\MusiqueDeMariage;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager ){
        $this->entityManager = $entityManager;
    }
   
    /**
     * @Route("/", name="home")
     */
   
    public function index(): Response
    {

        $publicite1 = $this->entityManager->getRepository(Publicite1::class)->findAll();
        $publicite3 = $this->entityManager->getRepository(Publicite3::class)->findAll();
        $publicite = $this->entityManager->getRepository(Publicite::class)->findAll();
        return $this->render('home/index.html.twig', [
            'publicite' => $publicite,
            'publicite1' => $publicite1,
            'publicite3' => $publicite3,
            
        ]);
    }
     /**
     * @Route("/home/detail/voyage/de/noce/{id}", name="home_detail_voyage")
    */
    public function detailvoyagedenoce($id)
    {
        $voyagedenoce= $this->getDoctrine()
                      ->getRepository(VoyageDeNoce::class)
                      ->findOneBy(['id'=>$id]);
                      return $this->render('home/detailvoyage.html.twig', [
                        'voyagedenoce' => $voyagedenoce]);
}
    /**
     * @Route("/home/detail/coiffure/{id}", name="home_detail_coiffure")
    */
    public function detailcoiffure($id)
    {
        $coiffure= $this->getDoctrine()
                      ->getRepository(Coiffure::class)
                      ->findOneBy(['id'=>$id]);
                      return $this->render('home/detailcoiffure.html.twig', [
                        'coiffure' => $coiffure]);
}
    /**
     * @Route("/home/detail/musique/{id}", name="home_detail_musique")
    */
    public function detailmusique($id)
    {
        $musiquedemariage = $this->getDoctrine()
                      ->getRepository(MusiqueDeMariage::class)
                      ->findOneBy(['id'=>$id]);
                      return $this->render('home/detailmusique.html.twig', [
                        'musiquedemariage' => $musiquedemariage]);
}
    /**
     * @Route("/home/detail/centre/{id}", name="home_detail_centre")
    */
    public function detailcentre($id)
    {
        $centredebeaute = $this->getDoctrine()
                      ->getRepository(CentreDeBeaute::class)
                      ->findOneBy(['id'=>$id]);
                      return $this->render('home/detailcentre.html.twig', [
                        'centredebeaute' => $centredebeaute]);
}
    /**
     * @Route("/home/detail/{id}", name="home_detail")
    */
    public function detail($id)
    {
        $photographe = $this->getDoctrine()
                      ->getRepository(Photographe::class)
                      ->findOneBy(['id'=>$id]);
                      return $this->render('home/detail.html.twig', [
                        'photographe' => $photographe]);
}
    /**
     * @Route("/home/details/{id}", name="home_details")
    */
    public function details($id)
    {
        $traiteurs = $this->getDoctrine()
                      ->getRepository(Traiteurs::class)
                      ->findOneBy(['id'=>$id]);
                      return $this->render('home/details.html.twig', [
                        'traiteurs' => $traiteurs]);
}
    /**
     * @Route("/home/{id}", name="home_show")
    */
    public function show($id)
    {
        $salledemariage = $this->getDoctrine()
                      ->getRepository(SalleDeMariage::class)
                      ->findOneBy(['id'=>$id]);
                      return $this->render('home/show.html.twig', [
                        'salledemariage' => $salledemariage]);
}

 
}
