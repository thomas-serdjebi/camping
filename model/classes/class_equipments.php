<?php 

class Equipments {

    private $id; 
    public $name, $size, $rate, $equipment;

    public function __construct(){
        
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

    public function CheckSize($equipment) {

        $checksize = $this->connexion->prepare("SELECT size FROM equipments WHERE name = '".$equipment."'");
        $checksize->setFetchMode(PDO::FETCH_ASSOC);
        $checksize->execute();

        $getchecksize = $checksize->fetchall();
        
        $size = $getchecksize[0]['size'];
        return $size;

        var_dump($getchecksize);
    }

    public function ModifRate($rate) {


    }
}