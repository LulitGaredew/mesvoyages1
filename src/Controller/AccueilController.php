<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

/**
 * Description of AccueilController
 *
 * @author lulit
 */
class AccueilController extends AbstractController{
 
    /**
     * @var Environment
     */
    private $twig; 

    /**
     * 
     * @Route("/", name="accueil")
     * @return Response
     */

    public function index(): Response{
    
        return new Response($this->twig->render("pages/accueil.html.twig"));
    }

    function __construct(Environment $twig) {
        $this->twig = $twig;
    }

    
}
