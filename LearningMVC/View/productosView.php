<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td{
            border:1px dotted #FF0000;
            align: center;
        }

    </style>
</head>
<body>
    <table>
        <tr><td>Nombre dle Artículo</td>
    <?php
        foreach($productosMatrix as $registro){
            echo "<tr><td>".$registro["NOMBREARTICULO"]."</td></tr>";

        }


    ?>
    </table>

</body>
</html>