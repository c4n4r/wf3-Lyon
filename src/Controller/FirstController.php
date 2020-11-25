<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class FirstController extends AbstractController {

    public function defaultAction(){
        $siteName = "Mon joli site";

        //faire un tableau qui représente une liste de jeux vidéos.
        $games = [
            [
                "name" => "Quake 3",
                "support" => "PC",
                "price" => 30,
                "type" => "FPS"
            ],
            [
                "name" => "Warcraft 3",
                "support" => "PC",
                "price" => 40,
                "type" => "RTS"
            ],
            [
                "name" => "Mario Kart 8",
                "support" => "Switch",
                "price" => 50,
                "type" => "Racing"
            ],
            [
                "name" => "Halo",
                "support" => "Xbox",
                "price" => 70,
                "type" => "FPS"
            ],
            [
                "name" => "Animal Crossing",
                "support" => "Switch",
                "price" => 60,
                "type" => "Life Sim"
            ]
        ];
        $filter = "PC";
        //afficher la liste des jeux sur le template avec toutes les informations

        //bonus, filtrer par support :
        // envoyer au template une variable filter qui représente le support a filtrer
        return $this->render('default.html.twig',
            ["site"=>$siteName, "games" => $games, "filter"=>$filter]);

    }

    public function homeAction(){
        return new Response('voici la home');
    }

}
