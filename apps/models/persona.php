<?php
    class persona{
        private $nombre;
        private $apellido;
        private $cedula;
        private $telefono;

        public function __construct($nombre,$apellido,$cedula,$telefono)
        {
            $this->nombre=$nombre;
            $this->apellido=$apellido;
            $this->cedula=$cedula;
            $this->telefono=$telefono;
        }

        public function setNombre($nombre)
        {   
            if(is_string($nombre) && trim($nombre) !=="")
                {
                    $this->nombre=$nombre;
                }
        }

        public function getNombre()
        {
            return $this->nombre;
        }

        public function setApellido($apellido)
        {   
            if(is_string($apellido) && trim($apellido) !=="")
                {
                    $this->apellido=$apellido;
                }
        }

        public function getApellido()
        {
            return $this->apellido;
        }

        public function setCedula($cedula)
        {   
            if(is_string($cedula) && trim($cedula) !=="")
                {
                    $this->cedula=$cedula;
                }
        }

        public function getCedula()
        {
            return $this->cedula;
        }

        public function setTelefono($telefono)
        {   
            if(is_string($telefono) && trim($telefono) !=="")
                {
                    $this->telefono=$telefono;
                }
        }

        public function getTelefono()
        {
            return $this->telefono;
        }

    }
?>