<?php
if(isset($_GET["pagina"])){
    if($_GET["pagina"]==1){
        header("location:index.php");
    }else{
        $pagina=$_GET["pagina"];
    }
  }else{
    $pagina=1;
  }
  require_once("Conexion.php");
  $base=Conectar::Conexion();
  $tamPagina=3;
  $empezarDesde=($pagina-1)*$tamPagina;
  
  $sql_total="SELECT * FROM USERDATA"; 
  $resultado=$base->prepare($sql_total);
  $resultado->execute(array());
  $nfilas=$resultado->rowCount();
  $totalPaginas=ceil($nfilas/$tamPagina);//ceil redondea al alza el numero de paginas
  
    
  $resultado->closeCursor();
  ?>