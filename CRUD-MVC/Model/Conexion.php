<?php
class Conectar{
    public static function conexion(){
        try{
            $conexion=new PDO("mysql:host=localhost; dbname=pruebas","root","francisco");
            $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $conexion->exec("SET CHARACTER SET UTF8");
            return $conexion;

        }catch(Exception $e){
            die("Error: ".$e->getMessage());
            echo "Error en linea ". $e->getLine();

        }
    }
}




?>