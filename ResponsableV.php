<?php

class ResponsableV{
    //Atributos
    private $nroEmpleado;
    private $nroLicencia;
    private $nombre;
    private $apellido;

    //Método
    public function __construct(
        $nroEmpleado,
        $nroLicencia,
        $nombre,
        $apellido
    ) {
        $this->nroEmpleado=$nroEmpleado;
        $this->nroLicencia=$nroLicencia;
        $this->nombre=$nombre;
        $this->apellido=$apellido;
    }

    //Retorno de métodos
    public function getNroEmpleado(){
        return $this->nroEmpleado;
    }

    public function getNroLicencia(){
        return $this->nroLicencia;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getApellido(){
        return $this->apellido;
    }

    //Seteo de valores
    public function setNroEmpleado($nroEmpleado){
        $this->nroEmpleado=$nroEmpleado;
    }

    public function setNroLicencia($nroLicencia){
        $this->nroLicencia=$nroLicencia;
    }

    public function setNombre($nombre){
        $this->nombre=$nombre;
    }

    public function setApellido($apellido){
        $this->apellido=$apellido;
    }

    public function __toString(){
        $cadena = "Nombre: " .$this->nombre. 
        ".\n Apellido: " .$this->apellido. 
        ".\n Número de licencia: " .$this->nroLicencia. 
        ".\n Número de empleado: " .$this->nroEmpleado;
        return $cadena;
    }

    
}