<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Request; //Ce use permet la lecture du paramètre Request dans la fonction getData qui permet de récupérer des données au lieu de les renvoyer comme Response
use Symfony\Component\HttpFoundation\Response; // Ce use permet la lecture de new Response
use Symfony\Component\Routing\Annotation\Route; //Ce use permet l'annotation de @Route

class DefaultController{

    /**
     * @Route("/", name="app_index")
     */


    public function index(){
        return new Response("Hello world");
    }

    /**
     * @Route("/", name="app_hello")
     */

    public function greeting(){
        return new Response("<h1>I'm greeting you</h1>");
    }


// le 1 correspond au chiffre à partir duquel on peut appeler la route et le 3 au nombre de chiffre autorisés (ici donc de 1 à 999)
// En mettant un ? après le paramètre (ici id) dans @Route, cela rend le paramètre optionnal
// La concaténation de paramètres dans l'url est possible comme ici id et nom entre accolades

    /**
     * @Route("product/{id?}&{nom}", name="app_product_item", requirements={"id"="\d{1,3}"}, defaults={"nom":"lait"}) 
     */

    public function getProducts($id, $nom){
        return new Response("Produit n° ".$id." et son nom est ".$nom);
    }

    /**
     * @Route("/data/{name}", name="app_data", methods={"GET", "POST"})
     */

    public function getData(Request $request){
        $n = $request -> get("name");
        return new Response($n);
    }
}