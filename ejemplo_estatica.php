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

    /*Los valores de las variables locales se destruyen una vez termina la ejecucion de la funcion, por lo tanto los valores no se guardan, para
    prevenir este comportamiento podemos declarar la variable de tipo estatica lo que permitiria guardar su valor una vez su ejecucion termine*/

        function incrementaVariable(){
            static $contador = 0; //con static el valor de la variable local se conserva
            $contador++;
            echo $contador . "<br>";
        }

        incrementaVariable();
        incrementaVariable();
        incrementaVariable();
        incrementaVariable();
        incrementaVariable();
        incrementaVariable();
    ?>
</body>
</html>