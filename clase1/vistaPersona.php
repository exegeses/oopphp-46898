<?php
    require '../config/config.php';
    require 'Persona.php';
    //instanciar = crear un objeto a partir de una clase
    $objPersona = new Persona('Rick', 'Sánchez');
    mostrar($objPersona);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <h1>Datos de la Persona</h1>

    <div class="objeto">
        <?= $objPersona->verDatos() ?>
    </div>

    <div class="objeto">
        <?php
            //asignamos valores a los atributos utilizando los setters
            $objPersona->setNombre('Ronnie');
            $objPersona->setApellido('Woods');
            echo $objPersona->verDatos();
        ?>
    </div>

</body>
</html>