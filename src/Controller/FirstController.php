<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class FirstController extends AbstractController {

    public function defaultAction(){
        $siteName = "Mon joli site";

        $articles = [
            [
                "title" => "Titre de mon article 1",
                "description" => "Oh que cet article est intéressant",
                "content" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dictum urna urna, eget ornare justo auctor at. Phasellus vestibulum nibh ut nunc volutpat auctor. Duis ut convallis odio. Aliquam vitae elementum eros. Nullam et lectus odio. Aliquam ut venenatis arcu. Suspendisse finibus diam augue, in ullamcorper nunc accumsan nec. Vestibulum semper nisi eget erat faucibus dapibus. Quisque vitae gravida mauris. Duis consectetur justo et mauris vulputate interdum. Suspendisse ut sem pretium, ultricies est in, fringilla ipsum.",
                "author" => "Hadrien Delphin"
            ],
            [
                "title" => "Titre de mon article 2",
                "description" => "Incroyable, un second article !!!",
                "author" => "Charlotte"
            ]
        ];
        return $this->render('default.html.twig',
            ["site"=>$siteName, "articles"=>$articles]);

    }

    public function homeAction(){
        return new Response('voici la home');
    }

}
