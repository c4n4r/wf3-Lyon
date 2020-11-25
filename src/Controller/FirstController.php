<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class FirstController extends AbstractController {

    private $games = [
        [
            "name" => "Quake 3",
            "support" => "PC",
            "price" => 30,
            "type" => "FPS",
            "image" => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fbogku.com%2Fwp-content%2Fuploads%2F2017%2F07%2FQuake-III-Arena-.jpg&f=1&nofb=1'
        ],
        [
            "name" => "Warcraft 3",
            "support" => "PC",
            "price" => 40,
            "type" => "RTS",
            "image" => "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fassets1.ignimgs.com%2F2018%2F11%2F02%2Fwarcraft-3-reforged---scr-8-1541191005572_1280w.jpg&f=1&nofb=1"
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
            "type" => "FPS",
            "image" => "https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fs3.amazonaws.com%2Fdigitaltrends-uploads-prod%2F2017%2F07%2Fhalo-3.jpg&f=1&nofb=1"
        ],
        [
            "name" => "Animal Crossing",
            "support" => "Switch",
            "price" => 60,
            "type" => "Life Sim",
            "image" => "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fstatic1.srcdn.com%2Fwordpress%2Fwp-content%2Fuploads%2F2020%2F04%2FAnimal-Crossing-New-Horizons-Scariest-Creepy-Villagers.jpg&f=1&nofb=1"
        ]
    ];


    public function defaultAction(Request $request){
        dd($request);
        //faire un tableau qui représente une liste de jeux vidéos.
        $filter = "All";
        //afficher la liste des jeux sur le template avec toutes les informations

        //bonus, filtrer par support :
        // envoyer au template une variable filter qui représente le support a filtrer
        return $this->render('default.html.twig',
            ["games" => $this->games, "filter"=>$filter]);

    }

    public function articleAction($name){
        $selectedGame = null;
        foreach ($this->games as $game){
            if($game['name'] === $name){
                $selectedGame = $game;
            }
        }
        return $this->render('article.html.twig', ['game' => $selectedGame]);

    }

    public function homeAction(){
        return new Response('voici la home');
    }

}
