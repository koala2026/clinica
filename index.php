<?php include "config.php";?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$sql = "SELECT ciudad,count(id) as totalusers FROM  `empleados` GROUP BY ciudad ORDER BY ciudad";

$records=mysqli_query($conn, $sql);
$data=array();
while($row=mysqli_fetch_assoc($records)){
    $data[] = $row;

    $jsonData = json_encode($data);

}
   

?>

<textarea style="display:none;" id="chartinfo"><?= $jsonData?></textarea>

<div id="ciudadChart" style="width: 100%; height: 500px;"></div>

<script type="text/javascript" src="http://www.gstatic.com/charts/loader.js">

</script>

<script type="text/javascript" src="chart.js"></script>

<form action="">

    <label for="" style="background-color: yellow">NOMBRE</label>
    <input type="text" id="" name="nombre">
    <label for="" style="background-color: yellow">APELLIDO</label>
    <input type="text" id="" name="apellido">
    <label for="" style="background-color: yellow">DIRECCION</label>
    <input type="text" id="" name="direccion">
    <label for="" style="background-color: yellow">EMAIL</label>
    <input type="text" id="" name="email">
    <label for="" style="background-color: yellow">COMENTARIO</label>
    <input type="text" id="" name="comentario">

</form>




</body>
</html>