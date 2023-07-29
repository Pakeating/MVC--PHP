<?php
include("conexion.php");
$base=Conectar::Conexion();
$id=$_GET["ID"];
$base->query("DELETE FROM USERDATA WHERE ID='$id'");
header("location:../index.php");


?>