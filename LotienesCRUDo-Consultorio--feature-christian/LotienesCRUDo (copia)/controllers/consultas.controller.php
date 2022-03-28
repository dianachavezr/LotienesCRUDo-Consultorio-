<?php


class ConsultaController
{
    public static function insertConsultaController()
    {
        if (isset($_POST['pacient'])) {
            $datosConsulta = array(
                "pacient" => $_POST['pacient'],
                "med" => $_POST['med'],
                "motiv" => $_POST['motiv'],
                "date" => $_POST['date'],
            );
            $response = ConsultaModel::insertConsultaModel("consulta", $datosConsulta);
            if ($response == "ok") {
                echo "<script>
                Swal.fire(
                {
                    position: 'top-center',
                    icon: 'success',
                    title: 'Registro Completado Exitosamente',
                    showConfirmButton: false,
                    timer: 1500
                }).then((result) => {
                    window.location.href = 'http://localhost/LotienesCRUDo/paciente'
                 }) 
                </script>";
            }
        }
    }

    public static function getConsultaController()
    {
        $tablaConsulta = "consulta";
        $request = ConsultaModel::getConsultaModel($tablaConsulta);
        foreach ($request as $key => $consulta) {
            echo " 
            <tr class='text-center'>
                <td>{$consulta['id']}</td>
                <td>{$consulta['paciente']}</td>
                <td>{$consulta['medico']}</td>
                <td>{$consulta['motivo']}</td>
                <td>{$consulta['fecha']}</td>
                <td>
                    <a class='text-success' href='#' id='{$consulta['id']}'><i class='bi bi-pencil-square'></i></a>
                    </td>
                    <td>
                    <a class= 'text-danger' href='#' id='{$consulta['id']}'><i class='bi bi-trash-fill'></i></a>
                    </td>
            </tr>
            
            
            ";
        }
    }


    /*=============================================
    ELIMINAR CONSULTA
    =============================================*/

    public static function deleteConsultaController()
    {

        if (isset($_GET["id"])) {

            $datos = $_GET["id"];

            $respuesta = ConsultaModel::deleteConsultaModel("consulta", "datos=" . $datos);

            if ($respuesta == "ok") {

                echo '<script>

				swal({
					  type: "success",
					  title: "El producto ha sido borrado correctamente",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar"
					  }).then(function(result){
								if (result.value) {

								window.location = "http://localhost/LotienesCRUDo/paciente";

								}
							})

				</script>';
            }
        }
    }
}
