<?php
namespace App\Controllers;
use App\Core\SQL;
use App\Core\View;

class Page
{
    public function show():void
    {
        $pageId = $_GET['id'];
        //Se connecter à la bdd
        $sql = new SQL();
        //Faire une requete SQL pour récupérer la page
        $result = $sql->getOneById("page", $pageId);
        //Créer une vue
        $view = new View("Page/show.php");
        //Envoyer à la vue toutes les données nécessaires
        $view->addData("title", $result["title"]);
        $view->addData("description", $result["description"]);
        $view->addData("content", $result["content"]);
    }
}