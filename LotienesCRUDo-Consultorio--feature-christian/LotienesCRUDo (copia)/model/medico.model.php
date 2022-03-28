<?php
require_once "conexion.php";



Class MedicoModel{

   public static function insertMedicoModel($tablaMed,$datos){
    $stmt = Conexion::conectar()->prepare("INSERT INTO $tablaMed(nombre, especializacion, cedula, email)
                                           VALUES (:nombre, :especializacion, :cedula, :email)"); 
    $stmt -> bindParam(":nombre", $datos["name"], PDO::PARAM_STR);
    $stmt -> bindParam(":especializacion", $datos["job"], PDO::PARAM_STR);
    $stmt -> bindParam(":cedula", $datos["document"], PDO::PARAM_INT);
    $stmt -> bindParam(":email", $datos["email"], PDO::PARAM_STR);
    
    if ($stmt->execute()){
        return "ok";
    }else {
        return "error";
    }
    $stmt= null;
   }


   public static function getMedicoModel($tablaMed){
    $stmt = Conexion::conectar()->prepare("SELECT * FROM $tablaMed ");
    $stmt->execute();
    return $stmt->fetchAll();

   }
}