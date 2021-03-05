<?php

    #### configuración general de sistema  ####
    session_start();

    #######################
    #### autoload()
    function miAutocarga( $Clase )
    {
        require_once 'clases/'.$Clase.'.php';
    }

    spl_autoload_register('miAutocarga');


    function mostrar($dato)
    {
        echo '<pre>';
        print_r($dato);
        echo '</pre>';
    }
