<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Publicite1Controller extends AbstractController
{
    /**
     * @Route("/publicite1", name="publicite1")
     */
    public function index(): Response
    {
        return $this->render('publicite1/index.html.twig', [
            'controller_name' => 'Publicite1Controller',
        ]);
    }
}
