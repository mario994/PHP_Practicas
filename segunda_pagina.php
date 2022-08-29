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
        //Las variables en php comienzan siempre con el $
        $nombre = "Mario";
        $edad = 27;
        //para concatenar texto y variables se usa el punto
        print "El nombre del usuario es: " . $nombre;
        // se puede concatener directamente si se usan comillas dobles
        print "<br>";
        print "El nombre del usuario es: $nombre";
        print "<br>";
        echo "El nombre del usuario tiene $nombre y tiene $edad";
    
    ?>
</body>
</html>