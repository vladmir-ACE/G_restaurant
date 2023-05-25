<?php
include_once('../../model/Produit/Produit.class.php');
$oProduit=new Produit();
$reponse=$oProduit->liste();

$data=$reponse->fetchAll();

include_once('../../vue/Commande/SelectProduct.php');



?>