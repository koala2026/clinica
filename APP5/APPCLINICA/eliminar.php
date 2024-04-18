<?php

include 'log/header.php'



?>

<div
    class="container" style="margin-top=150px ;width=300px"
>
  
    <form action="eliminar2.php" method="post">

    <div class="mb-3">
        <label for="" class="form-label">Eliminar Registro del Paciente</label>
        <input
            type="text"
            class="form-control"
            name="codigo"
            id=""
            aria-describedby="helpId"
            placeholder=""
            style="background-color: orange"
            
        />
        <small id="helpId" class="form-text text-muted"></small>
    </div>

    
    <br><br>
    
    <button type="submit" value="registrar" style="background-color: violet;margin-left:300px">ELIMINAR</button>




    </form>
</div>
