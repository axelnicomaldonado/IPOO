<?php
class Viaje{

    //Atributos
    private $codigo;
    private $destino;
    private $cantMaxPasajeros;
    private $colPasajeros;
    private $responsableV;

    //Métodos

    public function __construct($codigo, $destino, $cantMaxPasajeros, $colPasajeros, $responsableV){
            $this->codigo=$codigo;
            $this->destino=$destino;
            $this->cantMaxPasajeros=$cantMaxPasajeros;
            $this->colPasajeros=$colPasajeros;
            $this->responsableV=$responsableV;
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
    
    public function getColPasajeros(){
        return $this->colPasajeros;
    }

    public function getResponsableV(){
        return $this->responsableV;
    }

    //Retorna el arreglo de la información del pasajero según el índice
    public function getPasajero($indice){
        return $this->colPasajeros[$indice];
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

    public function setColPasajeros($indice, $valor){
        $this->colPasajeros[$indice] = $valor;
    }

    public function setResponsableV($responsableV){
        $this->responsableV=$responsableV;
    }

    public function __toString(){
        $cadena = "Código de viaje: " .$this->codigo. ". Destino: " .$this->destino. ". Cantidad máxima de pasajeros: " .$this->cantMaxPasajeros;
        return $cadena;

    }


    //Función que, con el DNI, verifica si el pasajero ya se encuentra en el viaje.
    /**public function verificarPasajero($dniRecibido){
        $pasajeroExistente = false;
        $i = 0;
        do {
            $PasajeroAVerificar = $this->getPasajero($i);
            $dniPasajero = $PasajeroAVerificar->getDni();
            if ($dniPasajero == $dniRecibido){
                $pasajeroExistente = true;
            } else {
                $i++;
            }
        } while ($pasajeroExistente = false || $i>$cantMaxPasajeros);
        return $pasajeroExistente;
    } */
    
    
    /**
     * public function modificarPasajero($indice, $nombre, $apellido, $telefono, $dni){
*  $pasajeroAModificar = $this->getPasajero($indice);
 * $pasajeroAModificar->setNombre($nombre);
  *$pasajeroAModificar->setApellido($apellido);
  *$pasajeroAModificar->setTelefono($telefono);
  *$pasajeroAModificar->setDni($dni);
     */
}