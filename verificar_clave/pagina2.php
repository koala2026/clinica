<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
    function verificarclave($clave1,$clave2){
        if($clave1 != $clave2){
            echo "Las Claves Ingresadas Son Diferentes";

        }else{
            echo "Su Clave Es Correcta";

        }
    }

    verificarclave($_REQUEST['clave1'],$_REQUEST['clave2']);


?>

</body>
</html>