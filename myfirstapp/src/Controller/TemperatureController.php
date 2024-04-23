<?php

 namespace App\Controller;

 use Symfony\Component\HttpFoundation\Request;
 use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
 use Symfony\Component\HttpFoundation\Response;
 use Symfony\Component\Routing\Annotation\Route;

 class TemperatureController extends AbstractController {

    #[Route ('/temperature', name: "temperature")]
    public function getTemperature(Request $request)
    {
        $temp = $request->query->get('temp');

        if (!is_numeric($temp)) {
            return new Response("Error: Temperature must be a number", 400);
        }else{
            $fahrenheit = ($temp * 9 / 5) + 32;
            $celcius = ($temp-32)/1.8;

       
            return new Response($temp ." Celcius in Fahrenheit is " . round($fahrenheit,2). ".". "<br>". $temp . " Fahrenheit in Celcius is " . round($celcius,2). ".");
        }  
    }
};