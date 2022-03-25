<?php
class Modelo
{
    private $Modelo;
    private $db;
    private $datos;
    public function __construct()
    {
        $this->Modelo = array();
        $this->db = new PDO('mysql:host=localhost;dbname=consultorio', "root", "");
    }

    public function insertar($tabla, $data)
    {
        $consulta = "insert into " . $tabla . " values(null," . $data . ")";
        $resultado = $this->db->query($consulta);
        if ($resultado) {
            return true;
        } else {
            return false;
        }
    }
    //METODO MOSTRAR
    public function mostrar($tabla, $condicion)
    {
        $consul = "select * from " . $tabla . " where " . $condicion . ";";
        $resu = $this->db->query($consul);
        while ($filas = $resu->FETCHALL(PDO::FETCH_ASSOC)) {
            $this->datos[] = $filas;
        }
        return $this->datos;
    }
    //METODO ACTUALIZAR
    public function actualizar($tabla, $data, $condicion)
    {
        $consulta = "update " . $tabla . " set " . $data . " where " . $condicion;
        $resultado = $this->db->query($consulta);
        if ($resultado) {
            return true;
        } else {
            return false;
        }
    }

    //METODO ELIMINAR O BORRAR REGISTRO
    public function eliminar($tabla, $condicion)
    {
        $eli = "delete from " . $tabla . " where " . $condicion;
        $res = $this->db->query($eli);
        if ($res) {
            return true;
        } else {
            return false;
        }
    }
}
