<?php

    class Region
    {
        private $regID;
        private $regNombre;

        public function listarRegiones()
        {
            $link = Conexion::conectar();
            $sql = "SELECT regID, regNombre
                        FROM regiones";

            $stmt = $link->prepare($sql);
            $stmt->execute();

            $regiones = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $regiones;
        }

        public function verRegionPorID()
        {
            $regID = $_GET['regID'];
            $link = Conexion::conectar();
            $sql = "SELECT regID, regNombre
                        FROM regiones
                        WHERE regID = :regID";
            $stmt = $link->prepare($sql);

            $stmt->bindParam(':regID', $regID, PDO::PARAM_INT);
            $stmt->execute();
            $region = $stmt->fetch(PDO::FETCH_ASSOC);
            ##### asignamos valores a los atributos
            $this->setRegID($region['regID']);
            $this->setRegNombre($region['regNombre']);
            //retornamos el objeto de tipo Region
            return $this;
        }

        public function agregarRegion()
        {

        }

        public function modificarRegion()
        {
            $regID = $_POST['regID'];
            $regNombre = $_POST['regNombre'];
            $link = Conexion::conectar();
            $sql = "UPDATE regiones 
                       SET  regNombre = :regNombre
                       WHERE regID = :regID";
            $stmt = $link->prepare($sql);
            $stmt->bindParam(':regNombre', $regNombre, PDO::PARAM_STR);
            $stmt->bindParam(':regID', $regID, PDO::PARAM_INT);

            if( $stmt->execute() ){
                //setear atributos
                $this->setRegID($regID);
                $this->setRegNombre($regNombre);
                //retornamos objeto de tipo Región
                return $this;
            }
            return false;


        }

        public function eliminarRegion()
        {

        }
        ##########################
        ## Getters & Setters
        /**
         * @return mixed
         */
        public function getRegID()
        {
            return $this->regID;
        }

        /**
         * @param mixed $regID
         */
        public function setRegID($regID)
        {
            $this->regID = $regID;
        }

        /**
         * @return mixed
         */
        public function getRegNombre()
        {
            return $this->regNombre;
        }

        /**
         * @param mixed $regNombre
         */
        public function setRegNombre($regNombre)
        {
            $this->regNombre = $regNombre;
        }

    }