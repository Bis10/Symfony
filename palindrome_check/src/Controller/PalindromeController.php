<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;

class PalindromeController
 extends AbstractController
{
    #[Route('/palindrome', name: 'app_palindrome')]
    public function index(Request $request): Response
    {
        // Exit statement here will prevent the code below from executing
        // exit('This is the new page');
        
        // Retrieve the string input from the request, or default to 'DAD' if not provided
        $string = $request->query->get('string') ?? 'DAD'; 
        
        // Check if the provided string is a palindrome
        $isPalindrome = $this->isPalindrome($string);

        // Render the palindrome template with the provided string and palindrome status
        return $this->render("palindrome/index.html.twig", [
            'string' => $string,
            'isPalindrome' => $isPalindrome,
        ]);
    }

    // Helper function to check if a string is a palindrome
    private function isPalindrome($string)
    {
        // Remove non-alphanumeric characters and convert to lowercase
        $cleanedString = strtolower(preg_replace('/[^a-zA-Z0-9]/', '', $string));
        
        // Check if the cleaned string is equal to its reverse
        return $cleanedString === strrev($cleanedString);
    }
}
