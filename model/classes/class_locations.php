<?php 

class Locations {

    private $id;
    public $name, $spaces, $location;

    public function Contruct(){
        
        try {

            $bdd = new PDO('mysql:host=localhost;dbname=camping', 'root', '');
            echo "Connecté à la bdd";
            $this->connexion=$bdd;
            
        }

        catch (PDOException $e) {

            echo $e->getMessage();
            die();
        
        }
    
    }

    public function CalculSpaces($spaces){
        
        

    }

    public function CheckSpaces($location){

        $checkspaces = $this->connexion->prepare("SELECT spaces FROM locations WHERE name='".$location."'");
        $checkspaces->execute();

    }

}