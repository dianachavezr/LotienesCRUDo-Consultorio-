<?php


class MedicoController
{
    public static function insertMedicoController()
    {
        if (isset($_POST['name'])) {
            $datosMedico = array(
                "name" => $_POST['name'],
                "job" => $_POST['job'],
                "document" => $_POST['document'],
                "email" => $_POST['email'],
            );
            $response = MedicoModel::insertMedicoModel("medico", $datosMedico);
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

    public static function getMedicoController()
    {
        $tablaMed = "medico";
        $request = MedicoModel::getMedicoModel($tablaMed);
        foreach ($request as $key => $medico) {
            echo " 
            <tr class='text-center'>
                <td>{$medico['id']}</td>
                <td>{$medico['nombre']}</td>
                <td>{$medico['especializacion']}</td>
                <td>{$medico['cedula']}</td>
                <td>{$medico['email']}</td>
                <td>
                    <a class='text-success' href='#' id='{$medico['id']}'><i class='bi bi-pencil-square'></i></a>
                    </td>
                    <td>
                    <a class= 'text-danger'  href='#' id='{$medico['id']}'><i class='bi bi-trash-fill'></i></a>
                </td>
            </tr>
            
            
            ";
        }
    }
}
