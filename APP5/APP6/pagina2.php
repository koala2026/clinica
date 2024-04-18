<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$conexion = mysqli_connect("localhost","root","","bdsel") or die("problema con la conexión");

$registros = mysqli_query($conexion,"SELECT codigo FROM alumnos WHERE mail='$_REQUEST[mail]'") or die("problema en la select: " . mysqli_error ($conexion));

if($reg = mysqli_fetch_array($registros)){
    mysqli_query($conexion, "DELETE FROM alumnos WHERE mail='$_REQUEST[mail]'") or die("problema en la select" .mysqli_error($conexion));

    echo "Se eliminó correctamente";

}else{

    echo "No Existe el email";
    
}

mysqli_close($conexion);

?>
    
</body>
</html>