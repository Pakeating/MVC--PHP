<?php
require_once("Model/personasModel.php");
$persona=new PersonasModel();
$personasMatrix=$persona->getPersonas();
$persona->setPersonas();

require_once("View/personasView.php")
?>
