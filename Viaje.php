<?php
class Viaje{

    //Atributos
    private $codigo;
    private $destino;
    private $cantMaxPasajeros;
    private $pasajero;

    //Métodos

    public function __construct($codigo, $destino, $cantMaxPasajeros, $pasajero){
            $this->codigo=$codigo;
            $this->destino=$destino;
            $this->cantMaxPasajeros=$cantMaxPasajeros;
            $this->pasajero=$pasajero;
    }

    //Retorno de métodos

    public function getCodigo(){
        return $this->codigo;
    }

    public function getDestino(){
        return $this->destino;
    }

    public function getcantMaxPasajeros(){
        return $this->cantMaxPasajeros;
    }

    //Retorna el arreglo de la información del pasajero según el índice
    public function getPasajero($indice){
        return $this->pasajero[$indice];
    }

    //Seteo de valores de métodos

    public function setCodigo($codigo){
        $this->codigo=$codigo;
    }

    public function setDestino($destino){
        $this->destino=$destino;
    }

    public function setcantMaxPasajeros($cantMaxPasajeros){
        $this->cantMaxPasajeros=$cantMaxPasajeros;
    }

    public function setPasajero($info, $indice, $valor){
        $this->pasajero[$indice] [$info] = $valor;
    }

    /** Array asociativo de los pasajeros.
     * Contiene su nombre, apellido y numero de documento.
     **/

     public function datosPasajero($nombre, $apellido, $documento){
        $arregloPasajero = [];
        $arregloPasajero ["nombre"] = $nombre;
        $arregloPasajero ["apellido"] = $apellido;
        $arregloPasajero ["dni"] = $documento;
        
    }
}