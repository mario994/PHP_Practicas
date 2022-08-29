<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "Este es el primer mensaje <br>";
        
        //include es para cuando el archivo es opcinal
        //require es para archivos obigatorios
        //include("proporciona_datos.php");
        require("proporciona_datos.php");

        echo "Este es el segundo mensaje <br>";
        dameDatos();
        dameDatos();
        dameDatos();
    ?>
</body>
</html>