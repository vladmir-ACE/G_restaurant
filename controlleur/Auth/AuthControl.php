<?php

if(isset($_POST['username'])&& isset($_POST['password'])){
         
    $username=$_POST['username'];
    $password=$_POST['password'];


    if ($username=="ADMIN" && $password=="vladmir") {
         header("Location:../../controlleur/Produit/listeControl.php");
    }else {
        echo "Authentification error";
    }

}else{
    echo "ereur inconnue";
}

?>