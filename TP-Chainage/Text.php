<?php

class Text {

    
    private $hello ;

    public function set(string $hello): self{
        $this->hello = $hello;
        return $this;
    }

   
    public function bold():self{
        $this->hello ='<strong>'.$this->hello.'</strong>';
        return $this;
    }

    public function print(){
        return $this->hello;
    }


    public function italic(){
        $this->hello ='<i>'.$this->hello.'</i>';
        return $this;
    }


    public function strike(){
        $this->hello ='<s>'.$this->hello.'</s>';
        return $this;
    }

}