<?php
include_once('../../model/Produit/Produit.class.php');
if(isset($_GET['id'])){

  $id=$_GET['id'];

  $oProduit= new Produit();
  $Data=$oProduit->premodif($id);
  $DATA=$Data->fetchAll();

  foreach ($DATA as $data) {
  $nom=$data['nom'];
  $prix=$data['prix'];
  $description=$data['description'];
  $typeProduit=$data['typeProduit'];
  $image=['image'];
  }

  
  
  include_once('../../vue/Produit/update.php');
  



}


?>