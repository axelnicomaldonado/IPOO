<?php
include_once "Pasajero.php";
class PasajeroVIP extends Pasajero{
    private $nroViajero;
    private $millas;

    public function __construct(
        $nombre,
        $apellido,
        $dni,
        $telefono,
        $nroAsiento,
        $nroTicket,
        $nroViajero,
        $millas){
            parent:: __construct(
            $nombre,
            $apellido,
            $dni,
            $telefono,
            $nroAsiento,
            $nroTicket);
        $this->nroViajero=$nroViajero;
        $this->millas=$millas;
    }

    public function getNroViajero(){
        return $this->nroViajero;
    }

    public function getMillas(){
        return $this->millas;
    }

    public function setNroViajero($nroViajero){
        $this->nroViajero=$nroViajero;
    }
    
    public function setMillas($millas){
        $this->millas=$millas;
    }

    public function __toString(){
        $cadena = parent:: __toString();
        $cadena .= "\n Número de viajero: " .$this->getNroViajero(). 
                ".\n Cantidad de millas del pasajero: " .$this->getMillas();
        return $cadena;
    }

    public function darPorcentajeIncremento(){
        $incremento = 1.35;
        if ($this->getMillas() > 300){
            $incremento = 1.30;
        }
        return $incremento;
    }
}