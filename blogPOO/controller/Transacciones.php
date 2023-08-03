<?php
    include_once('../model/ObjetoBlog.php');
    include_once('../model/ManejoObjetos.php');

    try{
        $conexion=new PDO("mysql:host=localhost; dbname=blogphp","root","francisco");
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        

       
        if($_FILES["imagen"]["error"]){
            switch($_FILES["imagen"]["error"]){
                case 1: //error exceso de tamaño de archivo en php.ini
                    echo"Tamaño archivo excesivo para el servidor";
                    break;
                case 2: //error tamaño archivo marcado desde formulario
                    echo"Tamaño de archivo superior al pertido (2Mb)";
                    break;
                case 3: //archivo subido parcialmente
                    echo"El envio del archivo se interrumpio";
                    break;
                case 4: //No hay fichero
                    echo"No se ha enviado ningun fichero";
                    break;
            }
        }else{
            echo"Entrada subida correctamente<br>";
            if((isset($_FILES["imagen"]["name"])&&($_FILES["imagen"]["error"]==UPLOAD_ERR_OK))){
                $destinoRuta="../imagenes/";   
                move_uploaded_file($_FILES["imagen"]["tmp_name"],$destinoRuta.$_FILES["imagen"]["name"]);
                echo "El archivo ". $_FILES["imagen"]["name"]." se ha copiado en el directorio de imágenes";
            }else{
                echo "El archivo no se ha podido copiar en el directorio de imágenes";
            }
        }

        $manejoObjeto=new ManejoObjetos($conexion);
        
        $blog=new ObjetoBlog();
        $blog->setTitulo(htmlentities(addslashes($_POST['campo_titulo']),ENT_QUOTES));
        $blog->setFecha(Date('Y-m-d H:i:s'));
        $blog->setComentario(htmlentities(addslashes($_POST['area_comentarios']),ENT_QUOTES));
        $blog->setImagen($_FILES['imagen']['name']);
        $manejoObjeto->insertarContenido($blog);
        echo'<br> Entrada añadida con exito<br>';
        echo'<a href="../view/Formulario.php">Añadir otra entrada</a>';
        echo'<a href="../view/MostrarBlog.php">Ir al Blog</a>';
       
    }catch( Exception $e){
        echo 'ERROR: '. $e->getMessage();
    }

    ?>