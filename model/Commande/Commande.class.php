<?php
include_once('../../model/BD.class.php');
class Commande{

    private $bd;

    public function __construct(){
     $database=new BD();
     $this->bd=$database->conection();
    }

    public function insert($nom_client,$Prenom_client,$TEL,$Qachat,$date,$statut,$Total,$id){
        $BD=$this->bd;
        $reponse=$BD->prepare('INSERT INTO Commande (nom_client,prenom_client,Tel,Qachat,date,statut,Total,id) VALUES(:nom_client,
        :Prenom_client,:Tel,:Qachat,:date,:statut,:Total,:id)');
        $reponse->execute(array(
            
            'nom_client' =>$nom_client,
            'Prenom_client'=>$Prenom_client,
            'Tel'=>$TEL,
            'date'=>$date,
            'Qachat'=>$Qachat,
            'statut'=>$statut,
            'Total'=>$Total,
            'id'=>$id
    ));}

    public function Total($id,$Qachat){
        $BD=$this->bd;
        $reponse=$BD->prepare('SELECT prix FROM Produits where id=:id');
        $reponse->execute(array(
            'id'=>$id
        ));

        $Data=$reponse->fetch();
        $rep=(int)$Data['prix'];
        $Qa=(int)$Qachat;

        $total=$rep*$Qa;
        return $total;

    }

    public function Liste(){
        $BD=$this->bd;
        $reponse=$BD->query('SELECT * FROM Commande ');
        return $reponse;
    }

    public function img_title($id){
        $BD=$this->bd;
        $reponse=$BD->prepare('SELECT image ,nom  FROM Produits where id=:id');
        $reponse->execute(array(
            'id'=>$id
        ));
        
        $rep=$reponse->fetchAll();
        return $rep;

    }

    public function ListeModif($id_c){
        $BD=$this->bd;
        $reponse=$BD->prepare('SELECT * FROM commande WHERE id_c=:id_c');
        $reponse->execute(array(
            'id_c'=>$id_c
        ));
        return $reponse;

    }
    
    public function Update($nom_client,$Prenom_client,$TEL,$Qachat,$date,$statut,$Total,$id_c){
        $BD=$this->bd;
        $reponse=$BD->prepare('UPDATE commande SET nom_client=:nom_client,prenom_client=:prenom_client,Tel=:Tel,Qachat=:Qachat,date=:date,statut=:statut,Total=:Total WHERE id_c=:id_c');
        $reponse->execute(array(
            'nom_client'=>$nom_client,
            'prenom_client'=>$Prenom_client,
             'Tel'=>$TEL,
             'Qachat'=>$Qachat,
             'date'=>$date,
             'statut'=>$statut,
             'Total'=>$Total,
             'id_c'=>$id_c


        ));

    }
    public function delete($id_c){
        $BD=$this->bd;
        $reponse=$BD->prepare('DELETE FROM commande where id_c=:id_c');
        $reponse->execute(array(
             'id_c'=>$id_c
        ));
        

    }






}


?>