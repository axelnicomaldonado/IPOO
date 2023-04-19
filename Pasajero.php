<?php
class Pasajero{
    //Atributos
    private $apellido;
    private $nombre;
    private $dni;
    private $telefono;

    //Métodos
    public function __construct(
        $nombre,
        $apellido,
        $dni,
        $telefono
    ) {
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->dni=$dni;
        $this->telefono=$telefono;
    }
        
    //Retorno de métodos
    public function getNombre(){
        return $this->nombre;
    }

    public function getApellido(){
        return $this->apellido;
    }

    public function getDni(){
        return $this->dni;
    }

    public function getTelefono(){
        return $this->telefono;
    }

    //Seteo de valores
    public function setNombre($nombre){
        $this->nombre=$nombre;
    }

    public function setApellido($apellido){
        $this->apellido=$apellido;
    }

    public function setDni($dni){
        $this->dni=$dni;
    }

    public function setTelefono($telefono){
        $this->telefono=$telefono;
    }
}