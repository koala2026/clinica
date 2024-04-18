
<?php

include 'log/header.php'

?>



<div
    class="container" style="margin-top=150px ;width=300px"
>
  
    <form action="registrar2.php" method="post">

    <div class="mb-3">
        <label for="" class="form-label">Código del Paciente</label>
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

    <div class="mb-3">
        <label for="" class="form-label">Nombre del Paciente</label>
        <input
            type="text"
            class="form-control"
            name="nombre"
            id=""
            aria-describedby="helpId"
            placeholder=""
            style="background-color: orange"
        />
        <small id="helpId" class="form-text text-muted"></small>
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Tipo de Habitación</label>
        <input
            type="text"
            class="form-control"
            name="habitacion"
            id=""
            aria-describedby="helpId"
            placeholder=""
            style="background-color: orange"
        />
        <small id="helpId" class="form-text text-muted"></small>
    </div>

    <br><br>
    
    <button type="submit" value="registrar" style="background-color: violet;margin-left:300px">REGISTRAR</button>




    </form>
</div>
