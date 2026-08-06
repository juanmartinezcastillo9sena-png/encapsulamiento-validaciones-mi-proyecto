<?php
    class inmueble{
        private $tipo_inmueble;
        private $direccion;
        private $area;
        private $habitaciones;
        private $banos;
        private $parqueadero;
        private $estado;
        private $valor_canon;

        public function __construct($tipo_inmueble, $direccion, $area, $habitaciones, $banos, $parqueadero, $estado, $valor_canon)
        {
            $this->tipo_inmueble=$tipo_inmueble;
            $this->direccion=$direccion;
            $this->area=$area;
            $this->habitaciones=$habitaciones;
            $this->banos=$banos;
            $this->parqueadero=$parqueadero;
            $this->estado=$estado;
            $this->valor_canon=$valor_canon;
        }

        public function setTipo_inmueble($tipo_inmueble) 
        {
            if (is_string($tipo_inmueble) && trim($tipo_inmueble) !=="")
                {
                    $this->tipo_inmueble=$tipo_inmueble;
                }            
        }

        public function getTipo_inmueble()
        {
            return $this->tipo_inmueble;
        }

        public function setDireccion($direccion) 
        {
            if (is_string($direccion) && trim($direccion) !=="")
                {
                    $this->direccion=$direccion;
                }            
        }

         public function getDireccion()
        {
            return $this->direccion;
        }

        public function setArea($area) 
        {
            if (is_string($area) && trim($area) !=="")
                {
                    $this->area=$area;
                }            
        }

         public function getArea()
        {
            return $this->area;
        }

        public function setHabitaciones($habitaciones) 
        {
            if (is_numeric($habitaciones) && $habitaciones>=0 && $habitaciones<=20)
                {
                    $this->habitaciones=$habitaciones;
                }            
        }

         public function getHabitaciones()
        {
            return $this->habitaciones;
        }

        public function setBanos($banos) 
        {
            if (is_numeric($banos) && $banos>=0)
                {
                    $this->banos=$banos;
                }            
        }

         public function getBanos()
        {
            return $this->banos;
        }

        public function setParqueadero($parqueadero) 
        {
            if (is_numeric($parqueadero) && $parqueadero>=0)
                {
                    $this->parqueadero=$parqueadero;
                }            
        }

         public function getParqueadero()
        {
            return $this->parqueadero;
        }

        public function setEstado($estado) 
        {
            if (is_string($estado) && trim($estado) !== "" && $estado="Disponible" || $estado="Ocupado" || $estado="Mantenimiento")
                {
                    $this->estado=$estado;
                }            
        }

         public function getEstado()
        {
            return $this->estado;
        }

        public function setValor_canon($valor_canon)
        {
            if (is_numeric($valor_canon) && $valor_canon>=0)
                {
                    $this->valor_canon=$valor_canon;
                }
        }

         public function getValor_canon()
        {
            return $this->valor_canon;
        }
    }
?>