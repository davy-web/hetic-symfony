<?php
// src/Controller/RegisterController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class RegisterController extends AbstractController
{
    /**
     * @Route("/inscription")
     */
    public function register(): Response
    {
        return $this->render('register.html.twig', [
        ]);
    }
}