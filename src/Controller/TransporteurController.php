<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TransporteurController extends AbstractController
{
    /**
     * @Route("/transporteur", name="app_transporteur")
     */
    public function index(): Response
    {
        return $this->render('transporteur/index.html.twig');
    }
}
