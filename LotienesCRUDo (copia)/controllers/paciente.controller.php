<?php


class PacienteController{
    public static function insertPacienteController(){
        if (isset($_POST['name'])){
            $datosPaciente = array(
                "name" => $_POST['name'],
                "age" => $_POST['age'],
                "document" => $_POST['document'],
                "email" => $_POST['email'],
            );
            $response = PacienteModel::insertPacienteModel("paciente",$datosPaciente); 
            if ($response=="ok"){
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

    public static function getPacientController(){
        $tabla= "paciente";
        $request= PacienteModel::getPacienteModel($tabla);
        foreach ($request as $key => $paciente) {
          echo " 
            <tr>
                <td>{$paciente['id']}</td>
                <td>{$paciente['nombre']}</td>
                <td>{$paciente['edad']}</td>
                <td>{$paciente['cedula']}</td>
                <td>{$paciente['email']}</td>
                <td>
                    <a href='#' id='{$paciente['id']}'>Actualizar</a>
                    <a href='#' id='{$paciente['id']}'>Eliminar</a>
                </td>
            </tr>
            
            
            ";
        }
    }
}