<?php


class MedicoController{
    public static function insertMedicoController(){
        if (isset($_POST['name'])){
            $datosMedico = array(
                "name" => $_POST['name'],
                "job" => $_POST['job'],
                "document" => $_POST['document'],
                "email" => $_POST['email'],
            );
            $response = MedicoModel::insertMedicoModel("medico",$datosMedico); 
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

    public static function getMedicoController(){
        $tablaMed= "medico";
        $request= MedicoModel::getMedicoModel($tablaMed);
        foreach ($request as $key => $medico) {
          echo " 
            <tr>
                <td>{$medico['id']}</td>
                <td>{$medico['nombre']}</td>
                <td>{$medico['especializacion']}</td>
                <td>{$medico['cedula']}</td>
                <td>{$medico['email']}</td>
                <td>
                    <a href='#' id='{$medico['id']}'>Actualizar</a>
                    <a href='#' id='{$medico['id']}'>Eliminar</a>
                </td>
            </tr>
            
            
            ";
        }
    }
}