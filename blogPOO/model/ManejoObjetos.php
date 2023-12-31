<?php
include_once("ObjetoBlog.php");
class ManejoObjetos{
private $miconexion;
public function __construct($miconexion){
    $this->miconexion=$miconexion;
    
}

public function getContenidoPorFecha(){
    $matriz=array();
    $contador=0;
    $resultado=$this->miconexion->query("SELECT* FROM contenido ORDER BY fecha DESC");
    while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
        $blog=new ObjetoBlog();
        $blog->setId($registro["id"]);
        $blog->setTitulo($registro["titulo"]);
        $blog->setFecha($registro["fecha"]);
        $blog->setComentario($registro["comentario"]);
        $blog->setImagen($registro["imagen"]);
        $matriz[$contador]=$blog;
        $contador++;

    }
    return $matriz;
}

public function insertarContenido(ObjetoBlog $blog){
    
    $sql='INSERT INTO contenido(titulo, fecha, comentario,imagen) VALUES("'.$blog->getTitulo().'","'.$blog->getFecha().'","'
    .$blog->getComentario().'","'.$blog->getImagen().'")';
    $this->miconexion->exec($sql);
}
}






?>