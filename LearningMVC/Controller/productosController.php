<?php
require_once("Model/productosModel.php");
$producto=new ProductosModel();
$productosMatrix=$producto->getProductos();

require_once("View/productosView.php")
?>
