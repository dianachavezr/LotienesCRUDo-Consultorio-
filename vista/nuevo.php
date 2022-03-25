<?php
require_once("layouts/header.php");
?>
<h1 class="text-center">NUEVO</h1>
<form action="" method="get">
    <input type="text" placeholder="INGRESE PACIENTE:" name="paciente"> <br>
    <input type="text" placeholder="INGRESE MEDICO:" name="medico"> <br>
    <input type="text" placeholder="INGRESE MOTIVO:" name="motivo"> <br>
    <input type="date" placeholder="INGRESE FECHA:" name="fecha"> <br>
    <input type="submit" class="btn" name="btn" value="GUARDAR"> <br>
    <? //este hidden es para llamar el metodo guardar con la variable m
    ?>
    <input type="hidden" name="m" value="guardar">
</form>

<?php
require_once("layouts/footer.php");
