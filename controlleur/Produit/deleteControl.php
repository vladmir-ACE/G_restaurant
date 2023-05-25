<?php
include_once('../../model/Produit/Produit.class.php');

if(isset($_GET['id'])){

    $id=$_GET['id'];

    
$oProduit=new Produit();
$reponse=$oProduit->delete($id);

header('Location:listeControl.php');

}else {
    echo"une erreru vient de ce produire ";
}






?>