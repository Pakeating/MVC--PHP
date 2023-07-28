<?php
    class ProductosModel{
        private $db;
        private $productos;
        public function __construct (){
            require_once("Model/Conexion.php");
            $this->db=Conectar::conexion();
            $this->productos=array();
        }
        public function getProductos(){
            $consulta=$this->db->query("SELECT * FROM ARTÍCULOS");
            while($filas=$consulta->fetch(PDO::FETCH_ASSOC)){
                $this->productos[]=$filas;
            }
            return $this->productos;
        }

    }


?>