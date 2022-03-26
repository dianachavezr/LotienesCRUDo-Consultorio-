<?php

require 'config/conexion.php';
$db = new Database();

$id = $_GET['id'];

echo $id;

$sentencia = $db->mysql->prepare('DELETE FROM productos WHERE id =?;');



if ($resultado = $sentencia->execute([$id])) {
    echo 'eliminado con exito';
} else {
    echo 'error';
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

                <a href="index.php"><button>Atras</button></a>
            </div>
        </div>

    </main>
</body>


</html>