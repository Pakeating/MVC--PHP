<?php
include_once("ObjetoBlog.php");
class ManejoObjetos{
private $miconexion;
public function __construc($miconexion){
    $this->miconexion=$miconexion;
}


public function getContenidoPorFecha(){
    $matriz=array();
    $contador=0;
    $resultado=$this->miconexion->query("SELECT* FROM contenido ORDER BY fecha DESC");
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
    if($this->miconexion==null){echo'PENE1';}
    $sql='INSERT INTO contenido(titulo, fecha, comentario,imagen) VALUES("'.$blog->getTitulo().'","'.$blog->getFecha().'","'
    .$blog->getComentario().'","'.$blog->getImagen().'")';
    if($this->miconexion==null){echo'PENE';}
    $this->miconexion->exec($sql);
}
}






?>