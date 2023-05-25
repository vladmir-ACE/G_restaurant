<?php
include_once('../../model/BD.class.php');

class Produit{
      
       private $bd;

       public function __construct(){
        $database=new BD();
        $this->bd=$database->conection();
       }


    public function insert ($nom,$prix,$description,$TypeProduit,$image){
        $BD=$this->bd;
        $query=$BD->prepare('INSERT INTO Produits (nom,prix,description,typeProduit,image) value(:nom,:prix,:description,:TypeProduit,:image)');
        $query->execute(
            array(
                'nom'=>$nom,
                'prix'=>$prix,
                'description'=>$description,
                'TypeProduit'=>$TypeProduit,
                'image'=>$image
            )
            );
    }

    public function liste(){
        $BD=$this->bd;
        $query=$BD->query('SELECT * FROM Produits');
        return $query;
    }
    
    public function premodif($id){
        $BD=$this->bd;
        $query=$BD->prepare('SELECT * FROM Produits where id=:id');
        $query->execute(
            array(
                'id'=>$id
            )
            );
        return $query;
    }


    public function Update($nom,$prix,$description,$typeProduit,$image,$id){
        $BD=$this->bd;
        $query=$BD->prepare('UPDATE Produits SET nom=:nom ,prix=:prix,description=:description, typeProduit=:typeProduit ,image=:image  WHERE id=:id');
        $query->execute(
            array(
                'nom'=>$nom,
                'prix'=>$prix,
                'description'=>$description,
                'typeProduit'=>$typeProduit,
                'image'=>$image,
                'id'=>$id
            )
        );
    }

    public function delete($id){
        $BD=$this->bd;
        $query=$BD->prepare('DELETE FROM Produits where id=:id');
        $query->execute(
            array(
                'id'=>$id
            )
            );
    }
    
}


?>