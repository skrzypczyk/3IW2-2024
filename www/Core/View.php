<?php

namespace App\Core;

class View
{
    private string $v;
    private string $t;

    public function __construct(string $v, string $t = "front.php"){
        $this->v =$v;
        $this->t =$t;
    }

    public function __toString(){
        return "Voici la vue selectionnée : ".$this->v .
                " et voici le template selectionné : ".$this->t;
    }


    public function __destruct(){
        include "../Views/".$this->t;
    }


}
