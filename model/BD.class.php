<?php

class BD{
    
    public function conection(){
         $bd=new PDO('mysql:host=localhost;dbname=RESTAURANT;charset=utf8','root','');
         return $bd;
    }
}



?>