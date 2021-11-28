<?php

namespace App\Controller;

use DateTimeImmutable;
use App\Entity\Traiteurs;
use App\Entity\Commentaire;
use App\Entity\Photographe;
use App\Entity\CentreDeBeaute;
use App\Entity\SalleDeMariage;
use App\Entity\MusiqueDeMariage;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CommentaireController extends AbstractController
{
    
    /**
     * @Route("/comment/add", name="comment_add")
     */
    public function add(Request $request)
    {
        $post_id = $request->request->get('post_id');

        $user = $this->getUser();

        $salledemariage = $this->getDoctrine()
                ->getRepository(SalleDeMariage::class)
                ->find($post_id);

        $comment = new Commentaire();
        $comment->setText($request->request->get('_comment'));
        $comment->setUser($user);
        $comment->setSalledemariage($salledemariage);
        $comment->setCreatedAt(new \DateTimeImmutable());

        $entityManager = $this->getDoctrine()->getManager();

        $entityManager->persist($comment);
        $entityManager->flush();

        $post_id = $salledemariage->getId();

        return $this->redirectToRoute('home_show',[
            'id' =>  $post_id
        ]);
    }
     /**
     * @Route("/comment/add1", name="comment_add1")
     */
    public function add1(Request $request)
    {
        $post_id = $request->request->get('post_id');

        $user = $this->getUser();

        $musiquedemariage = $this->getDoctrine()
                ->getRepository(MusiqueDeMariage::class)
                ->find($post_id);

        $comment = new Commentaire();
        $comment->setText($request->request->get('_comment'));
        $comment->setUser($user);
        $comment->setmusiquedemariage($musiquedemariage);
        $comment->setCreatedAt(new \DateTimeImmutable());

        $entityManager = $this->getDoctrine()->getManager();

        $entityManager->persist($comment);
        $entityManager->flush();

        $post_id = $musiquedemariage->getId();

        return $this->redirectToRoute('home_detail_musique',[
            'id' =>  $post_id
        ]);
    }
     /**
     * @Route("/comment/add2", name="comment_add2")
     */
    public function add2(Request $request)
    {
        $post_id = $request->request->get('post_id');

        $user = $this->getUser();

        $photographe = $this->getDoctrine()
                ->getRepository(Photographe::class)
                ->find($post_id);

        $comment = new Commentaire();
        $comment->setText($request->request->get('_comment'));
        $comment->setUser($user);
        $comment->setphotographe($photographe);
        $comment->setCreatedAt(new \DateTimeImmutable());

        $entityManager = $this->getDoctrine()->getManager();

        $entityManager->persist($comment);
        $entityManager->flush();

        $post_id = $photographe->getId();

        return $this->redirectToRoute('home_detail',[
            'id' =>  $post_id
        ]);
    
}
 /**
     * @Route("/comment/add3", name="comment_add3")
     */
    public function add3(Request $request)
    {
        $post_id = $request->request->get('post_id');

        $user = $this->getUser();

        $centredebeaute = $this->getDoctrine()
                ->getRepository(CentreDeBeaute::class)
                ->find($post_id);

        $comment = new Commentaire();
        $comment->setText($request->request->get('_comment'));
        $comment->setUser($user);
        $comment->setCentredebeaute($centredebeaute);
        $comment->setCreatedAt(new \DateTimeImmutable());

        $entityManager = $this->getDoctrine()->getManager();

        $entityManager->persist($comment);
        $entityManager->flush();

        $post_id = $centredebeaute->getId();

        return $this->redirectToRoute('home_detail_centre',[
            'id' =>  $post_id
        ]);
    
}
/**
     * @Route("/comment/add4", name="comment_add4")
     */
    public function add4(Request $request)
    {
        $post_id = $request->request->get('post_id');

        $user = $this->getUser();

        $traiteurs = $this->getDoctrine()
                ->getRepository(Traiteurs::class)
                ->find($post_id);

        $comment = new Commentaire();
        $comment->setText($request->request->get('_comment'));
        $comment->setUser($user);
        $comment->setTraiteurs($traiteurs);
        $comment->setCreatedAt(new \DateTimeImmutable());

        $entityManager = $this->getDoctrine()->getManager();

        $entityManager->persist($comment);
        $entityManager->flush();

        $post_id = $traiteurs->getId();

        return $this->redirectToRoute('home_details',[
            'id' =>  $post_id
        ]);
    
}
}