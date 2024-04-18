<?php

$conexion=mysqli_connect("localhost","root","","base1") or die ("problema con la conexion");

mysqli_query($conexion, "INSERT INTO alumnos(nombre,mail,codigo)VALUES('$_REQUEST[nombre]','$_REQUEST[mail]',$_REQUEST[codigo])") or die("problema en la select") . mysqli_error(($conexion));

mysqli_close($conexion);
echo "El Alumno ha sido dado de alta";



?>