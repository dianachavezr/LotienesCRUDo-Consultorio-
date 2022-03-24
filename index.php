<?php


require 'config/conexion.php';

$db = new Database();

$sentencia = $db->mysql->query('select*FROM productos');
$sentencia->execute();
$resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);

//echo '<prep>';
//print_r($resultado);

?>
<!doctype html>
<html lang="es">

<head>
    <title>Primer proyecto</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

</head>

<body>

    <!--Fin Alerta-->
    <h1>productos</h1>
    <a href="nuevo.php">Nuevo producto</a>
    <button></button>
    <table class="table - align-middle">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">nombre</th>
                <th scope="col">precio</th>
                <th scope="col">editar</th>
                <th scope="col">eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($resultado as $fila) { ?>
                <tr>
                    <td><?php echo $fila['id'] ?></td>
                    <td><?php echo $fila['nombre'] ?></td>
                    <td><?php echo $fila['precio'] ?></td>
                    <td><a class="text-success" href="editar.php? id=<?php echo $fila['id'] ?>"><i class="bi bi-pencil-square"></i></a></td>

                    <td><a onclick="return confirm('Seguro de eliminar registro?')" class="text-danger" href="eliminar.php? id=<?php echo $fila['id'] ?>"><i class="bi bi-trash3-fill"></a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>