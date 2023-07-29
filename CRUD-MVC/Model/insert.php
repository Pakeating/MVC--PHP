<?php
include_once("Conexion.php");
$base=Conectar::Conexion();
if(isset($_POST["cr"])){
    $nombre=$_POST["Nom"];
    $apellido=$_POST["Ape"];
    $direccion=$_POST["Dir"];
    $query="INSERT INTO USERDATA (NOMBRE, APELLIDO, DIRECCION) VALUES (:nom, :ape,:dir);";
    $resultado=$base->prepare($query);
    $resultado->execute(array(":nom"=>$nombre, ":ape"=>$apellido, ":dir"=>$direccion ));
    
  }
?>