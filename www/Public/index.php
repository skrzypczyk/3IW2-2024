<?php

spl_autoload_register("myAutoloader");
function myAutoloader(string $class){
    $pathClass = "../".str_ireplace(["App\\", "\\"], ["","/"], $class).".php";
    if(file_exists($pathClass)){
        include $pathClass;
    }
}



/*
 *  TP de routing
 *  - Récupérer l'url exemple : http://localhost/user/Add
 *  - Récupérer plus précisement l'URI : /user/Add
 *  - Nettoyer l'URI : exemple minuscules ....
 *  - Faire une relation entre /user/add et controller User et l'acion register
 *      --> Récupérer sous forme de tableau le contenu de routes.yml
 *      --> Récupérer le controller et l'action associé à l'URI
 *  - Appeler de manière dynamique le bon controller et la bonne action, exemple :
 *      --> $controller = new User();
 *      --> $controller->register();
 *
 * (Toujours garder en tête de faire un maximum de vérification avec des affichages d'erreur)
 */

$uri = strtok(strtolower($_SERVER["REQUEST_URI"]), "?");
$uri = (strlen($uri)>1)?rtrim($uri, "/"):$uri;


if(file_exists("../routes.yml")){
    $listOfRoutes = yaml_parse_file("../routes.yml");
}else{
    die("Le fichier de routing n'existe pas");
}

if(empty($listOfRoutes[$uri]) || empty($listOfRoutes[$uri]["controller"]) || empty($listOfRoutes[$uri]["action"])){
    die("Page not found : 404");
}
$controller = $listOfRoutes[$uri]["controller"];
$action = $listOfRoutes[$uri]["action"];


if(!file_exists("../Controllers/".$controller.".php")){
    die("Le fichier controller n'existe pas : ../Controllers/".$controller.".php");
}
require "../Controllers/".$controller.".php";

$controller = "\\App\\Controllers\\".$controller;
if(!class_exists($controller)){
    die("La classe controller n'existe pas : ".$controller);

}
//On fait une instance dynamique
$objetController = new $controller();

if(!method_exists($objetController, $action)){
    die("La methode controller n'existe pas : ".$action);
}
$objetController->$action();
