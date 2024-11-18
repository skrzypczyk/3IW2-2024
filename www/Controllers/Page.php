<?php
namespace App\Controllers;
class Page
{
    public function show():void
    {
        echo "Affiche la page avec l'id ".$_GET['id'];
    }
}