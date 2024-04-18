<?php

include 'log/header.php'

?>




<?php

$conexion=mysqli_connect("localhost","root","","clinica")or die("Problema con la conexión");

mysqli_query($conexion,"INSERT INTO pacientes(codigo,nombre,habitacion)VALUES($_REQUEST[codigo],'$_REQUEST[nombre]',$_REQUEST[habitacion])") or die("problema con la selección" . mysqli_error($conexion));

mysqli_close($conexion);



echo "<h3 style='font-size:50px; border:20px solid red; border-radius: 20px; width:400px;margin-top:100px;margin-left:auto; margin-right:auto; text-align:center'>El paciente fué registrado correctamente</h3>";



?>