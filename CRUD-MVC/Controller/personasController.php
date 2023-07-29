<?php
require_once("Model/personasModel.php");
$persona=new PersonasModel();
$personasMatrix=$persona->getPersonas();

require_once("View/personasView.php")
?>
