<?php
require_once "persona.php";

class usuario extends persona{
    private $rol;
    private $username;
    private $contrasena;

    public function __construct($nombre, $apellido, $cedula, $telefono, $rol, $username, $contrasena)
    {
        parent::__construct($nombre, $apellido, $cedula, $telefono);
        $this->rol=$rol;
        $this->username=$username;
        $this->contrasena=$contrasena;
    }

}
?>