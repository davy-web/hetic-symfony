<?php
// src/Controller/AccueilController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\AnnonceRepository;

class AccueilController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function accueil(AnnonceRepository $annonceRepository): Response
    {
        $titre = "Leboncoin du pauvre - Davy Grégory";

        return $this->render('accueil.html.twig', [
            'titre' => $titre,
            'annonces' => $annonceRepository->dernierAnnonces(),
        ]);
    }
}