<?php
    class PersonasModel{
        private $db;
        private $personas;
        public function __construct (){
            require_once("Model/Conexion.php");
            $this->db=Conectar::conexion();
            $this->personas=array();
        }
        public function getPersonas(){
            require ("paginacion.php");
            $consulta=$this->db->query("SELECT * FROM USERDATA LIMIT $empezarDesde, $tamPagina");
            while($filas=$consulta->fetch(PDO::FETCH_ASSOC)){
                $this->personas[]=$filas;
            }
            return $this->personas;
        }

    }


?>