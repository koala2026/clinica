<?php

function conectDB(){

    $servidor="localhost";
    $usuario="root";
    $password="";
    $db="evaluacion1";

    $con=mysqli_connect($servidor,$usuario,$password,$db) or die("No se pudo realizar la coneccion con la base de datos");
    
    return $con;
}



?>