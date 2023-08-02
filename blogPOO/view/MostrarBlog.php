<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include('../model/ManejoObjetos.php');
    try{
        $conexion=new PDO('mysql:host=localhost; dbname=blogphp','root','francisco');
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $manejoObjetos=new ManejoObjetos($conexion);
        $tabla_blog=$manejoObjetos->getContenidoPorFecha();
        if(empty($tabla_blog)){
            echo'No hay entradas aun';
        }else{
            foreach($tabla_blog as $valor){
                echo '<h3>'.$valor->getTitulo().'</h3';
                echo'<h4>'.$valor->getFecha().'</h4';
                echo'div style="width:400px">';
                echo $valor->getComentario().'</div>';
                if($valor->getImagen()!=''){
                    echo'<img src="../imagenes/';
                    echo $valor->getImagen().'"width="200px" height="200px"/>';
                }
                echo'<hr/>';
            }
        }



    }catch( Exception $e){
        echo 'ERROR: '. e->getMessage();
    }


    ?>
    <br>
    <a href='Formulario.php'>Insertar Nueva Entrada</a>
</body>
</html>