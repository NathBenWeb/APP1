<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request; 
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController{

    /**
     * @Route("/accueil", name="app_accueil")
     */


    public function accueil(){
        $title = "Accueil";
        $tab = ["lundi", "Mardi", "Mercredi", "Jeudi"];
        $image = "ef_plat.jpg";
        return $this -> render("home/accueil.html.twig", ["titre" => $title, "jours" => $tab, "plat" => $image]);
    }

    /**
     * @Route("/presentation", name="app_presentation")
     */

    public function presentation(){
        
        return $this -> render("home/presentation.html.twig");
    }
} 
   