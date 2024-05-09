<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
 
class AboutController extends AbstractController
{
    #[Route('/about', name: 'about')]
    public function index(Request $request): Response
    {
     
        $about = $request->query->get('about');
        return $this->render('about/index.html.twig');
    }
}
