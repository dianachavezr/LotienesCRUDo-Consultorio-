<?php


class ConsultaController{
    public static function insertConsultaController(){
        if (isset($_POST['pacient'])){
            $datosConsulta = array(
                "pacient" => $_POST['pacient'],
                "med" => $_POST['med'],
                "motiv" => $_POST['motiv'],
                "date" => $_POST['date'],
            );
            $response = ConsultaModel::insertConsultaModel("consulta",$datosConsulta); 
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

    public static function getConsultaController(){
        $tablaConsulta= "consulta";
        $request= ConsultaModel::getConsultaModel($tablaConsulta);
        foreach ($request as $key => $consulta) {
          echo " 
            <tr>
                <td>{$consulta['id']}</td>
                <td>{$consulta['paciente']}</td>
                <td>{$consulta['medico']}</td>
                <td>{$consulta['motivo']}</td>
                <td>{$consulta['fecha']}</td>
                <td>
                    <a href='#' id='{$consulta['id']}'>Actualizar</a>
                    <a href='#' id='{$consulta['id']}'>Eliminar</a>
                </td>
            </tr>
            
            
            ";
        }
    }
}