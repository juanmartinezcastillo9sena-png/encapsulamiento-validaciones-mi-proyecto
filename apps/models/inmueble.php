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

        public function setDireccion($direccion) 
        {
            if (is_string($direccion) && trim($direccion) !=="")
                {
                    $this->direccion=$direccion;
                }            
        }
    }
?>