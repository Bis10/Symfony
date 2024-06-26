<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
 
class HomeController extends AbstractController
{
    #[Route('/home', name: 'home')]
    public function index(Request $request): Response
    {
        
        $home = $request->query->get('home');

        return $this->render('home/index.html.twig');
    }
}
