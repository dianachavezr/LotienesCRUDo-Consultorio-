<?php
require_once "conexion.php";



class ConsultaModel
{

    public static function insertConsultaModel($tablaConsulta, $datos)
    {
        $stmt = Conexion::conectar()->prepare("INSERT INTO $tablaConsulta(paciente, medico, motivo, fecha)
                                           VALUES (:paciente, :medico, :motivo, :fecha)");
        $stmt->bindParam(":paciente", $datos["pacient"], PDO::PARAM_STR);
        $stmt->bindParam(":medico", $datos["med"], PDO::PARAM_STR);
        $stmt->bindParam(":motivo", $datos["motiv"], PDO::PARAM_INT);
        $stmt->bindParam(":fecha", $datos["date"], PDO::PARAM_STR);

        if ($stmt->execute()) {
            return "ok";
        } else {
            return "error";
        }
        $stmt = null;
    }


    public static function getConsultaModel($tablaConsulta)
    {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tablaConsulta ");
        $stmt->execute();
        return $stmt->fetchAll();
    }



    public static function deleteConsultaModel($tablaConsulta, $datos)
    {

        $stmt = Conexion::conectar()->prepare("DELETE FROM $tablaConsulta WHERE id = :id");

        $stmt->bindParam(":id", $datos, PDO::PARAM_INT);

        if ($stmt->execute()) {

            return "ok";
        } else {

            return "error";
        }

        $stmt = null;
    }
}
