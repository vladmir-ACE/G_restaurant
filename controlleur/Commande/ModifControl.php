<?php

$nom_client=$_POST['nom_client'];
$Prenom_client=$_POST['Prenom_client'];
$TEL=$_POST['TEL'];
$Qachat=$_POST['Qachat'];
$date=$_POST['date'];
$statut=$_POST['statut'];
$id_c=$_POST['id_c'];
$id=$_POST['id'];

include_once('../../model/Commande/Commande.class.php');
$oCommande=new Commande();


$Total=$oCommande->Total($id,$Qachat);

$oCommande->Update($nom_client,$Prenom_client,$TEL,$Qachat,$date,$statut,$Total,$id_c);

header('Location:listeControl.php');








?>