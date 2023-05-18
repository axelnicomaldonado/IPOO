<?php
class Pasajero{
    //Atributos
    private $apellido;
    private $nombre;
    private $dni;
    private $telefono;
    private $nroAsiento;
    private $nroTicket;

    //Métodos
    public function __construct(
        $nombre,
        $apellido,
        $dni,
        $telefono,
        $nroAsiento,
        $nroTicket
    ) {
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->dni=$dni;
        $this->telefono=$telefono;
        $this->nroAsiento=$nroAsiento;
        $this->nroTicket=$nroTicket;
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

    public function getNroAsiento(){
        return $this->nroAsiento;
    }

    public function getNroTicket(){
        return $this->nroTicket;
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

    public function setNroAsiento($nroAsiento){
        $this->nroAsiento=$nroAsiento;
    }

    public function setNroTicket($nroTicket){
        $this->nroTicket=$nroTicket;
    }

    public function __toString(){
        $cadena = "Nombre: " .$this->getNombre().
                ".\n Apellido: " .$this->getApellido().
                ".\n DNI: " .$this->getDni().
                ".\n Número de teléfono: " .$this->getTelefono().
                ".\n Número de asiento: " .$this->getNroAsiento().
                ".\n Número de ticket: " .$this->getNroTicket();
        return $cadena;
    }

    public function darPorcentajeIncremento(){
        $incremento = 1.10;
        return $incremento;
    }
}