<?php
//if(isset($_POST('nom_client'))&& isset($_POST('Prenom_client'))&& isset($_POST('TEL'))&& isset($_POST('Qachat'))&& isset($_POST('date'))&& isset($_POST('statut'))&& isset($_POST('id')))

   $nom_client=$_POST['nom_client'];
   $Prenom_client=$_POST['Prenom_client'];
   $TEL=$_POST['TEL'];
   $Qachat=$_POST['Qachat'];
   $date=$_POST['date'];
   $statut=$_POST['statut'];
   $id=$_POST['id'];

include_once('../../model/Commande/Commande.class.php');
$oCommande=new Commande();

$Total=$oCommande->Total($id,$Qachat);

$oCommande->insert($nom_client,$Prenom_client,$TEL,$Qachat,$date,$statut,$Total,$id);

header('Location:valideController.php');





?>