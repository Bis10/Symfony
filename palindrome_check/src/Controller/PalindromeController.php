<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class PalindromeController extends AbstractController
{
    #[Route('/palindrome', name: 'app_palindrome')]
    public function index(Request $request): Response
    {
        $string = $request->query->get('string');
        $isPalindrome = $this->isPalindrome($string);

        return $this->render("palindrome/index.html.twig", [
            'string' => $string,
            'isPalindrome' => $isPalindrome,
        ]);
    }

    private function isPalindrome($string)
    {
       
        $cleanedString = strtolower(preg_replace('/[^a-zA-Z0-9]/', '', $string));
        return $cleanedString === strrev($cleanedString);
    }
}
