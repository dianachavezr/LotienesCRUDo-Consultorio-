<?php
require_once "conexion.php";



Class PacienteModel{

   public static function insertPacienteModel($tabla,$datos){
    $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre, edad, cedula, email)
                                           VALUES (:nombre, :edad, :cedula, :email)"); 
    $stmt -> bindParam(":nombre", $datos["name"], PDO::PARAM_STR);
    $stmt -> bindParam(":edad", $datos["age"], PDO::PARAM_STR);
    $stmt -> bindParam(":cedula", $datos["document"], PDO::PARAM_INT);
    $stmt -> bindParam(":email", $datos["email"], PDO::PARAM_STR);
    
    if ($stmt->execute()){
        return "ok";
    }else {
        return "error";
    }
    $stmt= null;
   }


   public static function getPacienteModel($tabla){
    $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ");
    $stmt->execute();
    return $stmt->fetchAll();

   }
}