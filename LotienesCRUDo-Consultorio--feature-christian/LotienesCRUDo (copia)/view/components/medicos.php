<h1 class="text-center">Nuevo Medico</h1>

<div class="container-fluid d-flex justify-content-center" style="padding: 20px;">

    <img src="view/assets/img/OIUH4S03.png" width=100%>
</div>

<div class="container">
    <form method="post">
        <div class="row">
            <div class="col">
                <input type="text" placeholder="Nombre:" name="name"> <br>
            </div>
            <div class="col">
                <input type="text" placeholder="Especialización:" name="job"> <br>
            </div>
            <div class="col">
                <input type="text" placeholder="Documento:" name="document"> <br>
            </div>
            <div class="col">
                <input type="email" placeholder="Email" name="email"> <br>
            </div>
            <div class="col">
                <input type="submit" class="btn btn-primary mb-2" name="btn" value="GUARDAR"> <br>
            </div>
        </div>
    </form>
</div>
<?php

$crearPaciente = new MedicoController();
$crearPaciente->insertMedicoController();

?>

<div class="container">
    <div class="table-responsive ">
        <table class="table table-success table-striped table-bordered table-sm">
            <thead class="table-dark">
                <tr class="text-center roboto-medium">
                <tr class="text-center">
                    <th>ID</th>
                    <th>MEDICO</th>
                    <th>ESPECIALIZACIÓN</th>
                    <th>DOCUMENTO</th>
                    <th>EMAIL</th>
                    <th>EDITAR</th>
                    <th>ELIMINAR</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $getMedico = new MedicoController();
                $getMedico->getMedicoController();
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php
require_once("./view/layouts/footer.php");
