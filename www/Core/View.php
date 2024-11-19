<?php

namespace App\Core;

class View
{
    private string $v;
    private string $t;

    private array $data=[];

    public function __construct(string $v, string $t = "front.php"){
        $this->v =$v;
        $this->t =$t;
    }

    public function addData(string $key, $value):void
    {
        $this->data[$key]=$value;
    }



    public function __toString(){
        return "Voici la vue selectionnée : ".$this->v .
                " et voici le template selectionné : ".$this->t;
    }


    public function __destruct(){
        extract($this->data);
        include "../Views/".$this->t;
    }


}
