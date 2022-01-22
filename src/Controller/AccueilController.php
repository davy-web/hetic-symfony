<?php
// src/Controller/AccueilController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AccueilController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function accueil(): Response
    {
        $titre = "Hello Davy";

        return $this->render('accueil.html.twig', [
            'titre' => $titre,
        ]);
    }
}