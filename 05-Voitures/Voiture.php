<?php

class Voiture {

    private $brand;
    private $model;
    private $color;
    private $ready = 1;
    private $conductor;
    private $speed = 0;
    private $direction = "tout droit";
    private $vmax;


    /* Constructor */
    function __construct(string $brand, string $model, string $color, string $conductor )
    {
        $this->brand     = $brand;
        $this->model     = $model;
        $this->color     = $color;
        $this->conductor = $conductor;
        
    }

    /* Méthodes */
    public function start(){
        switch($this->getReady()){

            case 1 : 
                return "La ".$this->getBrand()." est arrétée";
            break;

            case 2 : 
                return "La ".$this->getBrand()." est en marche";
            break;
        }
          /*  if ( Voiture->getReady() === 1){
               return "Toutes les votures sont arrétés"
           } */

    }

    public function speed(int $speed){
        return $this->setSpeed($this->getSpeed() + $speed);
        
    }

    public function slowDown(int $speed){

       return $this->setSpeed($this->getSpeed() - $speed);
        
    }

    public function turn($to){
        if($this->getSpeed()<= 30){

            return $this->getBrand()." va vers la ".$to ;
        }
        else{
            return "La ".$this->getBrand()." va trop vite pour tourner, elle continue ".$this->getDirection();
        }  
    }

    public function stop(){
        
    }

    

    /* Getteurs */

   

    public function getReady():string {

        return $this->ready;
         
     }

    public function getBrand():string {

       return $this->brand;
        
    }

    public function getModel():string{

        return $this->model;
    }

    public function getColor():string{

        return $this->color;
    }

    public function getSpeed():int{

        return $this->speed;
    }

    public function getConductor():string{

        return $this->conductor;
    }

    public function getDirection():string{

        return $this->direction;
    }

    public function getVmax():string {

        return $this->vmax;
         
     }





    /* Setteurs */

    public function setBrand(string $brand){
        $this->brand = $brand;

        return $this;

    }

    public function setModel(string $model){
        $this->model = $model;

        return $this;
    }

    public function setColor(string $color){
        $this->color = $color;

        return $this;
    }

    public function setSpeed(int $speed){
        $this->speed = $speed;

        return $this;
    }

    public function setConductor(string $conductor){
        $this->speed = $conductor;

        return $this;
        
    }

    public function setReady(int $ready){
        $this->ready = $ready;

        return $this;
        
    }

    public function setVmax():int {


        if($this->getSpeed() > $this->getVmax()){

        $this->getVmax() = $this->getSpeed();

        }
        
        
         
     }

}