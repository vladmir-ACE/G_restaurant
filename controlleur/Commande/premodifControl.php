<?php
include_once('../../model/Commande/Commande.class.php');

if (isset($_GET['id_c'])) {
    $id_c=$_GET['id_c'];

    $oCommande=new Commande();
    $reponse=$oCommande->ListeModif($id_c);

    $DATA=$reponse->fetchAll();
    foreach ($DATA as  $data) {

        $nom_client=$data['nom_client'];
        $Prenom_client=$data['prenom_client'];
        $Tel=$data['Tel'];
        $Qachat=$data['Qachat'];
        $date=$data['date'];
        $statut=$data['statut'];
        $id_c=$data['id_c'];
        $id=$data['id'];
        
    }
    include_once('../../vue/Commande/Modif.php');


    
}





?>