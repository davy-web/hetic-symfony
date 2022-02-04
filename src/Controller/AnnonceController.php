<?php
// src/Controller/AnnonceController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\AnnonceRepository;

class AnnonceController extends AbstractController
{
    /**
     * @Route("/annonce/{id_annonce}")
     */
    public function annonce($id_annonce, AnnonceRepository $annonceRepository): Response
    {
        $titre = "Leboncoin du pauvre - Annonce";

        return $this->render('annonce.html.twig', [
            'titre' => $titre,
            'annonces' => $annonceRepository->annonceById($id_annonce),
            
        ]);
    }
}