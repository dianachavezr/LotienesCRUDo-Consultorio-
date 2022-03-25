<?php
require_once("layouts/header.php");
?>
<h1 class="text-center">EDITAR</h1>
<?php // aca se traen los datos de la cada id para poder editarlo en vez de un PLACEHOLDER en el input debe haber un value para traer cada dato, tambien se hace un input HIDDEN para ID y para actualizar para así poder traer cada producto por su ID y se llama el método ACTUALIZAR
?>
<form action="" method="get">
    <?php
    foreach ($dato as $key => $value) :
        foreach ($value as $v) :
    ?>
            <input type="text" value="<?php echo $v['paciente'] ?>" name="paciente"> <br>
            <input type="text" value="<?php echo $v['medico'] ?>" name="medico"> <br>
            <input type="text" value="<?php echo $v['motivo'] ?>" name="motivo"> <br>
            <input type="date" value="<?php echo $v['fecha'] ?>" name="fecha"> <br>
            <input type="hidden" value="<?php echo $v['id'] ?>" name="id"> <br>
            <input type="submit" class="btn" name="btn" value="ACTUALIZAR"> <br>
            <input type="hidden" name="m" value="actualizar">
    <?php
        endforeach;
    endforeach;
    ?>
</form>

<?php
require_once("layouts/footer.php");
