<?php

include_once('../../model/Commande/Commande.class.php');
if (isset($_GET['id_c'])) {
    $id_c=$_GET['id_c'];

    $oCommande=new Commande();
    $reponse=$oCommande->delete($id_c);
    
    header('Location:listeControl.php');

}


?>