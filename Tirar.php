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
    /*Operadores de comparacion
        == Es igual a sin tener el cuenta el tipo
        === Es igual a teniendo en cuenta el valor y el tipo
        != Es diferente a sin tener en cuenta el tipo
        <> Es diferente a teniendo en cuenta valor y tipo
        >, >=, <, <=
    */
        $variable1 = 8;
        $variable2 = "8";
        $variable3 = "Juan";
        if($variable1 === $variable2){
            echo "Son iguales";
        } else {
            echo "No son iguales";
        }
    ?>
    
</body>
</html>