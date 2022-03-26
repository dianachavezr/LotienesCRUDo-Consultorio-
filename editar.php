<?php

require 'config/conexion.php';

$db = new Database();

$id = $_GET['id'];

$sentencia = $db->mysql->prepare("SELECT * FROM productos WHERE id = ?;");
$sentencia->execute([$id]);
$producto = $sentencia->fetch(PDO::FETCH_ASSOC);

?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Editar datos:
                </div>
                <form class="p-4" method="POST" action="guardar.php">
                    <div class="mb-3">
                        <input type="hidden" class="form-control" name="id" autofocus required value="<?php echo $producto['id'] ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nombre: </label>
                        <input type="text" class="form-control" name="nombre" required value="<?php echo $producto['nombre']; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">precio: </label>
                        <input type="number" class="form-control" name="precio" autofocus required value="<?php echo $producto['precio'] ?>">
                    </div>

                    <a href="index.php"><button>Atras</button></a>
                    <button type="submit">Guardar</button>

                </form>
            </div>
        </div>
    </div>
</div>