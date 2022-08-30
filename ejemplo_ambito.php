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
        $nombre = "Mario"; //Este un ambito
        function dameNombre(){
            global $nombre; //Permite usar las variables a nivel global dentro de las funciones
            $nombre = "El nombre es " . $nombre; //Este es un ambito local
        }
        /*Vaiables declaradas dentro de funciones son de ambito local
        Variables declaradas fuera de funciones pertenecen a otro ambito
        Si quieremos declarar una variable a nivel global debemos usar la palabra global */
        dameNombre();
        echo $nombre;
    ?>
</body>
</html>