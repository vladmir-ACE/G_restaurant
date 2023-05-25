<?php
include_once('../../model/dash/dash.class.php');
$oDash=new Dash();
$reponse=$oDash->PrixProduit();

foreach($reponse as $data){
    $prix[]=$data['prix'];
    $nom[]=$data['nom'];
}


include_once('../../vue/dasboard/index.php');



?>