<?php

include_once('../../model/Produit/Produit.class.php');

if(isset($_POST['nom']) && isset($_POST['prix']) && isset($_POST['description']) && isset($_POST['TypeProduit']) && isset($_FILES['image']) ){


   $img_name=$_FILES['image']['name'];
   $img_size=$_FILES['image']['size'];
   $tmp_name=$_FILES['image']['tmp_name'];
   $error=$_FILES['image']['error'];

    $img_ex=pathinfo($img_name, PATHINFO_EXTENSION);
    $img_ex_lc=strtolower($img_ex);

    $allowed_exs= array("jpg","jpeg","png");

    $nom=$_POST['nom'];
    $prix=$_POST['prix'];
    $description=$_POST['description'];
    $typeProduit=$_POST['TypeProduit'];

    if (in_array($img_ex_lc,$allowed_exs)){
        $new_img_name=uniqid('IMG-',true).'.'.$img_ex_lc;
        $img_upload_path='../../image/'.$new_img_name;
        
        $oProduit= new Produit();
        $oProduit->insert($nom,$prix,$description,$typeProduit,$new_img_name);

        move_uploaded_file($tmp_name, $img_upload_path);
        
         echo "succes";
         header("Location:listeControl.php");
    }
    else{
        echo "chose only jpg,jpeg,png image ";
    }

} else{
    echo "error";
}

?>