<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Description;
use Illuminate\Http\Request;
use App\Models\Chiffre;

class AccueilController extends Controller
{
    //

    public function index(){
        $list = [
            [
                "image"=>asset('images/carousel4.jpg'),
                "titre"=>"ABM Fibre",
                "description"=>" La société de distribution experte dans le domaine des télécommunications par fibre optique depuis 5 ans.
                 Son l'objectif est de fournir les équipements nécessaires aux sociétés qui déploient, opèrent et entretiennent les réseaux très haut débit en France."
            ],
            [
                "image"=>asset('images/carousel5.jpg'),
                "titre"=>"ABM Fibre",
                "description"=>"La société de distribution experte dans le domaine des télécommunications par fibre optique depuis 5 ans.
                Son l'objectif est de fournir les équipements nécessaires aux sociétés qui déploient, opèrent et entretiennent les réseaux très haut débit en France."
            ],
            [
                "image"=>asset('images/carousel6.jpg'),
                "titre"=>"ABM Fibre",
                "description"=>"La société de distribution experte dans le domaine des télécommunications par fibre optique depuis 5 ans.
                Son l'objectif est de fournir les équipements nécessaires aux sociétés qui déploient, opèrent et entretiennent les réseaux très haut débit en France."
            ],
            [
                "image"=>asset('images/carousel0.jpg'),
                "titre"=>"ABM Fibre",
                "description"=>"La société de distribution experte dans le domaine des télécommunications par fibre optique depuis 5 ans.
                Son l'objectif est de fournir les équipements nécessaires aux sociétés qui déploient, opèrent et entretiennent les réseaux très haut débit en France."
            ]


        ];
        $chiffres = [
            [
                "titre"=>"",
                "contenu" => "Plus de 13000 clients satisfaits",
                "icon"=>"fas fa-award"

            ],
            [
                "titre"=>"",
                "contenu" => "Distributeur officiel Orange",
                "icon"=>"fas fa-broadcast-tower"
            ],
            [
                "titre"=>"",
                "contenu" => "Un service de qualité",
                "icon"=>"fas fa-star"
            ]

            ];




        $cards = Service::All();

       // $chiffres = Chiffre::All();

        return view('accueil',[
            'topList'=>$list,

            'cartes' => $cards,
            'chiffres' => $chiffres
        ]);


    }
}
