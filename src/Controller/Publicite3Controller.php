<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Publicite3Controller extends AbstractController
{
    /**
     * @Route("/publicite3", name="publicite3")
     */
    public function index(): Response
    {
        return $this->render('publicite3/index.html.twig', [
            'controller_name' => 'Publicite3Controller',
        ]);
    }
}
