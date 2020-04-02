<?php


class CountryCapital{


    private $file;
    private $pays;
   

    public function __construct( string $file){

        $this->file     = $file;
        $this->getFile();
       
    }

    public function getCapitalByCountry(string $nomPays){

        foreach ($this->pays as $pay) {
           if($pay->country == $nomPays ){
               return "La capitale de la ".$pay->country." est ".$pay->capital;
           };
        }
        
    }

    public function getCountryByCapital(string $capitale){

        foreach ($this->pays as $pay) {
            if($pay->capital == $capitale ){
                
                return "Le pays de la capitale ".$pay->capital." est ".$pay->country;
            };
         }
    }

    public function getCapitals(){

        foreach ($this->pays as $pay) {
           
                echo "Pays : ".$pay->country."<br>
                        Capitale : ".$pay->capital."<br>";
            
         }

    }

    private function getFile(){

        if (file_exists($this->file)){

            $pays = file_get_contents($this->file);
             /* var_dump($pays)."<br>"; */

             /* On stock dans variable pays les données */
            $this->pays = json_decode($pays); 
        }


        

    }

}