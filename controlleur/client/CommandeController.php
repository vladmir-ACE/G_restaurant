<?php

if (isset($_GET['id'])) {
    $id =$_GET['id'];

    include_once('../../vue/espaceClient/Commande.php');
    
}
else{
    echo "UNE ERREUR S'EST PRODUIT ";
}


?>