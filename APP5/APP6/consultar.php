<?php


$conexion=mysqli_connect("localhost","root","base1") or die("Problemas con la conexión");

$registros = mysqli_query($conexion, "SELECT codigo, nombre, mail FROM alumnos") or die("Problema con la Selección" .mysqli_error($conexion));

while($reg=mysqli_fetch_array($registros)){
    echo "Código del Estudiante" .$reg['codigo'] . "<br>";
    echo "Nombre del Estudiante" .$reg['codigo'] . "<br>";
    echo "Mail del Estudiante" .$reg['codigo'] . "<br>";
}

mysqli_close($conexion);



?>