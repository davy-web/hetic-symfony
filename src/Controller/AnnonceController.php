<?php
// src/Controller/AnnonceController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Annonce;

class AnnonceController extends AbstractController
{
    /**
     * @Route("/annonce")
     */
    public function annonce(): Response
    {
        $titre = "Leboncoin du pauvre - Annonce";

        return $this->render('annonce.html.twig', [
            'titre' => $titre,
        ]);
    }
}