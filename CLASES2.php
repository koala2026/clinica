<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

    function retornapromedio($valor1,$valor2){
        $nota=$valor1+$valor2/2;
    return $nota;
    }

    $nota1=20;
    $nota2=50;
    $promedio=retornapromedio($nota1,$nota2);

    echo $promedio;
    




?>
</body>
</html>