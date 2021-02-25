<?php

    //
    $link = new PDO(
                    'mysql:host=localhost;dbname=agencia',
                    'root',
                    'root'
                );

    $sql = "SELECT regID, regNombre FROM regiones";

    //preparamos el sql
    $stmt = $link->prepare($sql);
    //ejecutamos sql
    $stmt->execute();

    /*
    $unaRegion = $stmt->fetch(PDO::FETCH_ASSOC);

    echo '<pre>';
    print_r($unaRegion);
    echo '</pre>';
    */
    $regiones = $stmt->fetchAll(PDO::FETCH_ASSOC);

    /*
    echo '<pre>';
    print_r($regiones);
    echo '</pre>';
    */

    foreach ( $regiones as $region ){
        echo $region['regID'], ':', $region['regNombre'], '<br>';
    }
