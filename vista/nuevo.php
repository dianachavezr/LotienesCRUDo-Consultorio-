<?php
require_once("layouts/header.php");
?>
<div class="container-fluid d-flex justify-content-center" style="padding: 20px;">

    <img src="vista/img/OIUH4S03.png" width=100%>
</div>
<h1 class="text-center">Nueva Cita</h1>
<div class="container">
    <form action="" method="get">
        <input type="text" placeholder="INGRESE PACIENTE:" name="paciente"> <br>
        <input type="text" placeholder="INGRESE MEDICO:" name="medico"> <br>
        <input type="text" placeholder="INGRESE MOTIVO:" name="motivo"> <br>
        <input type="date" placeholder="INGRESE FECHA:" name="fecha"> <br>
        <input type="submit" class="btn btn-link" name="btn" value="GUARDAR"> <br>
        <? //este hidden es para llamar el metodo guardar con la variable m
        ?>
        <input type="hidden" name="m" value="guardar">
    </form>
</div>
<?php
require_once("layouts/footer.php");
