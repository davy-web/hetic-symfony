<?php
// src/Controller/ThemeController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Annonce;

class ThemeController extends AbstractController
{
    /**
     * @Route("/theme")
     */
    public function theme(ManagerRegistry $doctrine): Response
    {
        // $date_now = new \DateTime('@'.strtotime('now'));

        // $annonce = new Annonce();
        // $annonce->setTitre('titre');
        // $annonce->setDescription('description');
        // $annonce->setPhotoPrincipale('photo.jpg');
        // $annonce->setPrix(1);
        // $annonce->setDatePublication($date_now);
        // $annonce->setAuteur('auteur');
        
        // $entity_manager = $doctrine->getManager();
        // $entity_manager->persist($annonce);
        // $entity_manager->flush();

        $titre = "Theme Elements";

        return $this->render('theme.html.twig', [
            'titre' => $titre,
        ]);
    }
}