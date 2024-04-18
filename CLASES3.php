<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

function cuadradocubo($valor , &$cuad , &$cubo){
    $cuad=$valor*$valor;
    $cubo=$valor*$valor*$valor;
    return $cuad;
    return $cubo;

}

    cuadradocubo(2, $c1 ,$c2);
    echo "El Cuadrado de 2 es: " . $c1 ."<br>";
    echo "El Cubo de 2 es: " . $c2;
    


?>

</body>
</html>