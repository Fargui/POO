<?php

class Personnage{

    /* Variables */
    public $name;
    public $age;
    public $atk;
    public $vie;

    /* Constructeur */

    public function __construct(string $name)
    {
        $this->name = $name;
        
    }

    public function direBonjour(string $name){
        echo 'Bonjour '.$name.'<br>';
    }

    public function attaque( Personnage $name){
        return $name->vie = ($name->vie)-($this->atk);

    }

    public function getName(){
        return $this->name;
    }
}



?>