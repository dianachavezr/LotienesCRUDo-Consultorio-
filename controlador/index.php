<?php
require_once("modelo/index.php");
class modeloController
{
    private $modelCons;
    public function __construct()
    {
        $this->modelCons = new Modelo();
    }
    // mostrar
    static function index()
    {
        $consultaMed   = new Modelo();
        $dato       =   $consultaMed->mostrar("consulta", "1");
        require_once("vista/index.php");
    }
    //nuevo
    static function nuevo()
    {
        require_once("vista/nuevo.php");
    }
    //guardar
    static function guardar()
    {
        $paciente = $_REQUEST['paciente'];
        $medico = $_REQUEST['medico'];
        $motivo = $_REQUEST['motivo'];
        $fecha = $_REQUEST['fecha'];
        $data = "'" . $paciente . "'," . $medico . "'," . $motivo . "'," . $fecha;
        $consultaMed = new Modelo();
        $dato = $consultaMed->insertar("consulta", $data);
        header("location:" . urlsite);
    }



    //editar - se debe recuperar el id del formulario para editarlo
    static function editar()
    {
        $id = $_REQUEST['id'];
        $consultaMed = new Modelo();
        $dato = $consultaMed->mostrar("consulta", "id=" . $id);
        require_once("vista/editar.php");
    }
    //actualizar
    static function actualizar()
    {
        $id = $_REQUEST['id'];
        $paciente = $_REQUEST['paciente'];
        $medico = $_REQUEST['medico'];
        $motivo = $_REQUEST['motivo'];
        $fecha = $_REQUEST['fecha'];
        $data = "paciente='" . $paciente . "',medico=" . $medico . "',motivo=" . $motivo . "',fecha=" . $fecha;
        $consultaMed = new Modelo();
        $dato = $consultaMed->actualizar("consulta", $data, "id=" . $id);
        header("location:" . urlsite);
    }


    //eliminar
    static function eliminar()
    {
        $id = $_REQUEST['id'];
        $consultaMed = new Modelo();
        $dato = $consultaMed->eliminar("consulta", "id=" . $id);
        header("location:" . urlsite);
    }
}
