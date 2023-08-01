<?php
include("ObjetoBlog.php");
class ManejoObjetos{
private $conexion;
public function __construc($conexion){
    $this->setConexion($conexion);
}
public function setConexion(PDO $conexion){
$this->conexion=$conexion;

}
public function getContenidoPorFecha(){
    $matriz=array();
    $contador=0;
    $resultado=$this->conexion->query("SELECT* FROM contenido ORDER BY fecha");
    while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
        $blopg=new ObjetoBlog();
        $blog->setId($registro["id"]);
        $blog->setTitulo($registro["Titulo"]);
        $blog->setFecha($registro["Fecha"]);
        $blog->setComentario($registro["Comentario"]);
        $blog->setImagen($registro["Imagen"]);
        $matriz[$contador]=$blog;
        $contador++;

    }
    return $matriz;
}

public function insertarContenido(ObjetoBlog $blog){
    $sql='INSERT INTO contenido(titulo, fecha, comentario,imagen) VALUES("'.$blog->getTitulo().'","'.$blog->getFecha().'","'
    .$blog->getComentario().'","'.$blog->getImagen().'")';
    $this->conexion->exec($sql);
}


}



?>