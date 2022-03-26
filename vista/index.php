<?php
require_once("layouts/header.php");
?>
<? // m es una variable q llama a un nuevo producto, no se pone /index porque enviaria al inicio, solo index  
?>
<a href="index.php?m=nuevo" class="btn">NUEVO</a>
<table>
    <tr>
        <td>ID</td>
        <td>PACIENTE</td>
        <td>MEDICO</td>
        <td>MOTIVO</td>
        <td>FECHA</td>
        <td>ACCIÓN</td>
    </tr>
    <tbody>
        <?php
        //para preguntar si hay datos o no
        if (!empty($dato)) :
            // este for each es para mapear los datos y traerlos de db
            foreach ($dato as $key => $value)
                // este for each es para mostrar los valores de cada registro con la variable $v luego de pone el cuerpo de la tabla para llamar los datos y mostrarlos
                foreach ($value as $v) : ?>

                <tr>
                    <td><?php echo $v['id'] ?> </td>
                    <td><?php echo $v['paciente'] ?> </td>
                    <td><?php echo $v['medico'] ?> </td>
                    <td><?php echo $v['motivo'] ?> </td>
                    <td><?php echo $v['fecha'] ?> </td>
                    <td>
                        <a class="btn" href="index.php?m=editar&id=<?php echo $v['id'] ?>">EDITAR</a>
                        <a class="btn" href="index.php?m=eliminar&id=<?php echo $v['id'] ?>" onclick="return confirm('ESTA SEGURO'); false">ELIMINAR</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else : ?>
            <tr>
                <td colspan="3">NO HAY REGISTROS</td>
            </tr>
        <?php endif ?>
    </tbody>
</table>
<?php
require_once("layouts/footer.php");
