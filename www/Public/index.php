<?php

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

