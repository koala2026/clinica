<?php

$conexion = mysqli_connect("localhost", "root","", "clinica") or die("problema con la conexión");

$registros = mysqli_query($conexion, "SELECT codigo FROM pacientes WHERE codigo=$_REQUEST[codigo]") or die("problema en el select" . mysqli_error($conexion));

if($reg=mysqli_fetch_array($registros)){

    mysqli_query($conexion, "DELETE FROM  pacientes WHERE codigo=$_REQUEST[codigo]") or die("problemas en el select" . mysqli_error($conexion));

    echo "SE ELIMINO EL REGISTRO";

}else{

    echo "No Existe el Registro a Eliminar";

}

mysqli_close($conexion);


?>