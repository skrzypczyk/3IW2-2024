<?php

namespace App\Controllers;

use App\Core\View;

class Main
{

    public function home():void
    {
        $pseudo = "Yves";
        $view = new View("Main/home.php");
        $view->addData("pseudo", $pseudo);
        $view->addData("email", "y.skrzypczyk@gmail.com");
    }

}