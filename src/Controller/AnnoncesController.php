<?php
// src/Controller/AnnoncesController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\AnnonceRepository;

class AnnoncesController extends AbstractController
{
    /**
     * @Route("/annonces")
     */
    public function annonces(AnnonceRepository $annonceRepository): Response
    {
        $titre = "Leboncoin du pauvre - Annonces";

        return $this->render('annonces.html.twig', [
            'titre' => $titre,
            'annonces' => $annonceRepository->findAll(),
        ]);
    }
}