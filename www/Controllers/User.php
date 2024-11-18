<?php
namespace App\Controllers;

use App\Core\User as U;
use App\Core\View;

class User
{
    public function register(): void
    {
        echo "Page d'inscription";
    }

    public function login(): void
    {
        $view = new View("User/login.php", "front.php");
        //echo $view;
    }


    public function logout(): void
    {
        $user = new U;
        $user->logout();
        //header("Location: /");
    }



}

