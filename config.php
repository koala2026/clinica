<?php

session_start();

$host="localhost";
$user="root";
$password="";
$bdname="grafico_chart";

$conn = mysqli_connect($host,$user,$password,$bdname);

if(!$conn){
    die("conexion fallida: " .mysqli_connect_error());

}
?>