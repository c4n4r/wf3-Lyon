<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class FirstController extends AbstractController {

    public function defaultAction(){
        $siteName = "Mon joli site";

        $users = ["Hadrien", "Pauline", "Jean"];

        $articles = [
            "Lé déconfinement, pas pour tout de suite",
            "Rugbyman célèbre retrouvé mort...",
            "Les réfrigirateurs sont moins chers chez but",
            "Le poulpe était en réalité... Basile Boli"
        ];
        return $this->render('default.html.twig',
            ["site"=>$siteName, "articles"=>$articles]);

    }

    public function homeAction(){
        return new Response('voici la home');
    }

}
