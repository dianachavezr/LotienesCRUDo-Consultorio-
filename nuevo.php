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
    <h1>productos</h1>
    <h1>Nuevos productos</h1>
    <form action='guardar.php' method="POST">
        <div>
            <label>Nombre</label>
            <input type="text" name="nombre" id="nombre" required autofocus>
        </div>
        <div>
            <label>Precio</label>
            <input type="text" name="precio" id="precio" required autofocus>
        </div>
        <a href="index.php"><button>Atras</button></a>
        <button type="submit">Guardar</button>
    </form>
</body>


</html>