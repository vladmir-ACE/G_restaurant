<?php
include_once('../../model/BD.class.php');

   class Dash{
      
    private $bd;

    public function __construct(){
     $database=new BD();
     $this->bd=$database->conection();
    }

    public function PrixProduit(){
        $BD=$this->bd;
        $query=$BD->query('SELECT nom ,prix FROM Produits');
        return $query;
    }

    
}

?>