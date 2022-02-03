<?php
// src/Controller/AccueilController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Annonce;

class AccueilController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function accueil(ManagerRegistry $doctrine): Response
    {
        $date_now = new \DateTime('@'.strtotime('now'));

        $annonce = new Annonce();
        $annonce->setTitre('titre');
        $annonce->setDescription('description');
        $annonce->setPhotoPrincipale('photo.jpg');
        $annonce->setPrix(1);
        $annonce->setDatePublication($date_now);
        
        $entity_manager = $doctrine->getManager();
        $entity_manager->persist($annonce);
        $entity_manager->flush();

        $titre = "Hello Davy";

        return $this->render('accueil.html.twig', [
            'titre' => $titre,
        ]);
    }
}