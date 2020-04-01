<?php


class Personnage{

/* Constantes */
const NOVICE =  1;
const MEDIUM =  2;
const EXPERT =  3;

/* Proprietés */
private $name;
private $pv = 100;
private $exp;


/* Méthodes */

public function __construct(string $name, int $exp )
{
    $this->name = $name;
    $this->exp  = $exp;
}


public function salue(Personnage $opponent): string{

    return $this->name." salue ".$opponent->name;
}

public function attaque(Personnage $opponent):self {

   switch ($this->exp) {

           case self::NOVICE : 
           $opponent->pv -= 10;

           break;

           case self::MEDIUM :
           $opponent->pv -= 20;

           break;

           case self::EXPERT :
            $opponent->pv -= 20;
            
           break;
       
       default:
           # code...
           break;
   }

   return $this;

}

public function superAttaque(Personnage $opponent) {


    
}

public function attaqueSecrete(){

    
}

public function soigne(){

    
}

public function levelUp(){

    
}

/* GETTEUR */
public function getName(){
    return $this->name;
}

/* SETTEUR */
private function setName(string $name){
    return $this->name = $name;
}



public function getPv(){
   return $this->pv;
}

public function setPv(string $pv){
    return $this->pv = $pv;
}



public function getExp(){
   return $this->exp;
}

public function setExp(string $exp){
    return $this->exp = $exp;
}




}