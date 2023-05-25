<?php
include_once('../../model/Commande/Commande.class.php');
$oCommande=new Commande();
$reponse=$oCommande->Liste();

$data=$reponse->fetchAll();

include_once('../../vue/Commande/Liste.php');

