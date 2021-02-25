<?php

    class Foo
    {
        private function __construct()
        {
            echo 'método constructor';
        }

        public function publico()
        {
            echo 'método publico';
        }
        private function privado()
        {
            echo 'método privado';
        }
        static function estatico()
        {
            echo 'método estático';
        }
    }

    ########################
    ### en otro archivo
    //instanciamos
    # $Foo = new Foo;
    //invocamos métodos
    # $Foo->publico();
    //$Foo->privado();
    # $Foo->estatico();
    Foo::estatico();
