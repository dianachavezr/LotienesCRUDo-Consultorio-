<h1 class="text-center">Nueva Consulta</h1>

<div class="container-fluid d-flex justify-content-center" style="padding: 20px;">

    <img src="view/assets/img/OIUH4S02.png" width=100%>
</div>

<div class="container">
    <form method="post">
        <div class="row">
            <div class="col">
                <input type="text" class="form-control" placeholder="Paciente:" name="pacient"> <br>
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Medico:" name="med"> <br>
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Motivo:" name="motiv"> <br>
            </div>
            <div class="col">
                <input type="date" class="form-control" placeholder="Fecha" name="date"> <br>
            </div>
            <div class="col">
                <input type="submit" class="btn btn-primary mb-2" name="btn" value="GUARDAR"> <br>
            </div>
        </div>
    </form>
</div>
<?php

$crearConsulta = new ConsultaController();
$crearConsulta->insertConsultaController();

?>
<div class="container">
    <div class="table-responsive ">
        <table class="table table-success table-striped table-bordered table-sm">
            <thead class="table-dark">
                <tr class="text-center roboto-medium">
                    <th>ID</th>
                    <th>PACIENTE</th>
                    <th>MEDICO</th>
                    <th>MOTIVO</th>
                    <th>FECHA</th>
                    <th>EDITAR</th>
                    <th>ELIMINAR</th>


                </tr>
            </thead>

            <tbody>
                <?php
                $getConsulta = new ConsultaController();
                $getConsulta->getConsultaController();
                ?>
            </tbody>
        </table>
    </div>
</div>
<?php
require_once("./view/layouts/footer.php");
