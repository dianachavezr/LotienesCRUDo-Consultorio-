<h1 class="text-center">Nuevo Paciente</h1>

<div class="container-fluid d-flex justify-content-center" style="padding: 20px;">

    <img src="view/assets/img/OIUH4S01.png" width=100%>
</div>


<div class="container">
    <form method="post">
        <div class="row ">
            <div class="col">
                <input type="text" class="form-control" placeholder="Nombre:" name="name"> <br>
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Edad:" name="age"> <br>
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Documento:" name="document"> <br>
            </div>
            <div class="col">
                <input type="email" class="form-control" placeholder="Email" name="email"> <br>
            </div>
            <div class="col">
                <input type="submit" class="btn btn-primary mb-2" name="btn" value="GUARDAR"> <br>
            </div>
        </div>
    </form>
</div>
<?php

$crearPaciente = new PacienteController();
$crearPaciente->insertPacienteController();

?>

<div class="container">
    <div class="table-responsive ">
        <table class="table table-success table-striped table-bordered table-sm">
            <thead class="table-dark">
                <tr class="text-center roboto-medium">
                    <th>ID</th>
                    <th>PACIENTE</th>
                    <th>EDAD</th>
                    <th>DOCUMENTO</th>
                    <th>EMAIL</th>
                    <th>EDITAR</th>
                    <th>ELIMINAR</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $getPacientes = new PacienteController();
                $getPacientes->getPacientController();
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php
require_once("./view/layouts/footer.php");
