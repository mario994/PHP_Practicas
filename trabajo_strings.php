<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         .resaltar{
            color:#f00;
            font-weight: bold;
         }
    </style>
</head>
<body>
    <?php
    /*
    strcmp() es una funcion que compara 2 strings haciendo distinción de mayusculas y minusculas
    */
        $variable1 = "casa";
        $variable2 = "CASA";

        $resultado = strcmp($variable1, $variable2); //Devuelve 1 si NO son iguales 0 si son iguales
        if($resultado){
            echo "No coincide";
        } else {
            echo "Coinciden";
        }

    ?>
</body>
</html>