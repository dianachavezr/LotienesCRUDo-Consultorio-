<?php
require_once("layouts/header.php");
?>
<? // m es una variable q llama a un nuevo producto, no se pone /index porque enviaria al inicio, solo index  
?>
<div class=" container-fluid d-flex justify-content-center" style="padding: 20px;">

    <img src="vista/img/OIUH4S02.png" width=100%>
</div>
<div class="container">

    <h1 class="text-center">Tabla de Consulta General</h1>
    <a href="index.php?m=nuevo" class="btn btn-link">Nueva Cita</a>

    <div class="table-responsive ">
        <table class="table table-success table-striped table-bordered table-sm">
            <thead class="table-dark">
                <tr class="text-center roboto-medium">
                    <td scope="col">ID</td>
                    <td>PACIENTE</td>
                    <td>MEDICO</td>
                    <td>MOTIVO</td>
                    <td>FECHA</td>
                    <th>EDITAR</th>
                    <th>ELIMINAR</th>
                </tr>
            </thead>

            <tbody>
                <?php
                //para preguntar si hay datos o no
                if (!empty($dato)) :
                    // este for each es para mapear los datos y traerlos de db
                    foreach ($dato as $key => $value)
                        // este for each es para mostrar los valores de cada registro con la variable $v luego de pone el cuerpo de la tabla para llamar los datos y mostrarlos
                        foreach ($value as $v) : ?>

                        <tr class="text-center">
                            <td><?php echo $v['id'] ?> </td>
                            <td><?php echo $v['paciente'] ?> </td>
                            <td><?php echo $v['medico'] ?> </td>
                            <td><?php echo $v['motivo'] ?> </td>
                            <td><?php echo $v['fecha'] ?> </td>
                            <td>
                                <a class=" text-success" href="index.php?m=editar&id=<?php echo $v['id'] ?>"><i class="bi bi-pencil-square"></i></a>

                            </td>
                            <td>
                                <a class="text-danger" href="index.php?m=eliminar&id=<?php echo $v['id'] ?>" onclick="return confirm('Seguro de eliminar registro?') ; false"><i class="bi bi-trash-fill"></i></a>
                            </td>

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
    </div>
</div>
<?php
require_once("layouts/footer.php");
