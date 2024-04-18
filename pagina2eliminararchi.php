<?php

$conexion=mysqli_connect("localhost","root","","base1") or die ("problema con la conexion");

$registros=mysqli_query($conexion, "SELECT codigo from alumnos where mail='$_REQUEST[mail]'")
or die("problema en la seleccion" . mysqli_error($conexion));

if($reg = mysqli_fetch_array($registros)){
    mysqli_query($conexion, "DELETE from alumnos where mail='$_REQUEST[mail]'") or die("problema en la seleccion" . mysqli_error($conexion));

    echo "Se eliminó correctamente";

}else{
    echo "no existe el mail";
}


mysqli_close($conexion);


?>