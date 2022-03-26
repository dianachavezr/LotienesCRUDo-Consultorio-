<?php

require 'config/conexion.php';

$db = new Database();
$correcto = false;

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    echo $id, $nombre, $precio;

    $sentencia = $db->mysql->prepare("UPDATE productos SET nombre = ?, precio = ? WHERE id = ?;");
    $resultado = $sentencia->execute([$nombre, $precio, $id]);
    if ($resultado) {
        $correcto = true;
    }
} else {

    //recibe info del form nuevo.php
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    echo $nombre, $precio;

    $sql = 'INSERT INTO productos (nombre, precio) VALUES (:nombre, :precio)';
    $respuesta = $db->mysql->prepare($sql);

    $respuesta->execute([
        ':nombre' => $nombre,
        ':precio' => $precio,
    ]);

    if ($respuesta) {
        $correcto = true;
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">

    <title>Primer proyecto</title>
</head>

<body>
    <main>
        <div>
            <div>
                <?php if ($correcto) { ?>
                    <h3>Registro Guardado</h3>
                <?php } else { ?>
                    <h3>Error al guardar</h3>
                <?php } ?>
                <a href="index.php"><button>Atras</button></a>
            </div>
        </div>

    </main>
</body>


</html>