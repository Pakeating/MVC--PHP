<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    </style>
</head>
<body>
    <?php require("Model/paginacion.php"); ?>

    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
  <table width="50%" border="0" align="center">
    <tr >
      <td class="primera_fila">Id</td>
      <td class="primera_fila">Nombre</td>
      <td class="primera_fila">Apellido</td>
      <td class="primera_fila">Dirección</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
    </tr> 
   
		<?php
      foreach($personasMatrix as $persona):
      
    ?> 
   	<tr>
      <td><?php echo $persona["ID"] ?></td>
      <td><?php echo$persona["NOMBRE"]?></td>
      <td><?php echo $persona["APELLIDO"]?></td>
      <td><?php echo $persona["DIRECCION"]?></td>
 
      <td class="bot"><a href="delete.php?ID=<?php echo$persona["ID"]?>"><input type='button' name='del' id='del' value='Borrar'></a></td>

      <td class='bot'><a href="editar.php?ID=<?php echo$persona["ID"]?>& nom=<?php echo$persona["NOMBRE"]?>
      & ape=<?php echo$persona["APELLIDO"]?> & dir=<?php echo$persona["DIRECCION"]?>"><input type='button' name='up' id='up' value='Actualizar'></a></td>
    </tr> 
    <?php 
      endforeach; //fin del bucle
    ?>
    
	<tr>
	<td></td>
      <td><input type='text' name='Nom' size='10' class='centrado'></td>
      <td><input type='text' name='Ape' size='10' class='centrado'></td>
      <td><input type='text' name=' Dir' size='10' class='centrado'></td>
      <td class='bot'><input type='submit' name='cr' id='cr' value='Insertar'></td></tr>    
      
      <tr><td> <?php
      
     for($i=1; $i<=$totalPaginas;$i++){
      echo "<a href='?pagina= ".$i."'> ".$i."</a>, " ;
      }
      
      ?></td></tr>
    </table>
</form>



<!------------------------------------------------------------------------------------------------>
    

    ?>
    </table>

</body>
</html>