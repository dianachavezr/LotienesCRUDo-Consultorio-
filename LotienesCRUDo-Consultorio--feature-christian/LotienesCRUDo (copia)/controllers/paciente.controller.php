<?php


class PacienteController
{
    public static function insertPacienteController()
    {
        if (isset($_POST['name'])) {
            $datosPaciente = array(
                "name" => $_POST['name'],
                "age" => $_POST['age'],
                "document" => $_POST['document'],
                "email" => $_POST['email'],
            );
            $response = PacienteModel::insertPacienteModel("paciente", $datosPaciente);
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

    public static function getPacientController()
    {
        $tabla = "paciente";
        $request = PacienteModel::getPacienteModel($tabla);
        foreach ($request as $key => $paciente) {
            echo " 
            <tr class='text-center'>
                <td>{$paciente['id']}</td>
                <td>{$paciente['nombre']}</td>
                <td>{$paciente['edad']}</td>
                <td>{$paciente['cedula']}</td>
                <td>{$paciente['email']}</td>
                <td>
                    <a class='text-success' href='#' id='{$paciente['id']}'><i class='bi bi-pencil-square'></i></a>
                    </td>
                    <td>
                    <a class= 'text-danger' href='#' id='{$paciente['id']}'><i class='bi bi-trash-fill'></i></a>
                </td>
            </tr>
            
            
            ";
        }
    }
}
