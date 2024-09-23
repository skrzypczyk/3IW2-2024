<?php


class House{
    //Proprietes - Attributs
    public $wall = 4;
    private $roof = 1;
    public $window = 1;
    private $stage = 0;
    private $stairs = 0;
    public $door = 1;
    private $fundation = 1;
    public $color = "Grey";

    public function addStage()
    {
        $this->stage++;
        $this->wall+=4;
        $this->window++;
        $this->stairs++;
    }

}


echo "<pre>";
//Objet = instance d'une classe
$myGreenHouse = new House();
$myGreenHouse->color = "Green";
print_r($myGreenHouse);


$myRedHouse = new House();
$myRedHouse->color = "Red";
$myRedHouse->addStage();
$myRedHouse->addStage();
print_r($myRedHouse);
//var_dump($myRedHouse);







