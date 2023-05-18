<?php
class Viaje{

    //Atributos
    private $codigo;
    private $destino;
    private $cantMaxPasajeros;
    private $colPasajeros;
    private $responsableV;
    private $costoViaje;
    private $montoAbonado;

    //Métodos

    public function __construct($codigo, $destino, $cantMaxPasajeros, $colPasajeros, $responsableV, $costoViaje, $montoAbonado){
            $this->codigo=$codigo;
            $this->destino=$destino;
            $this->cantMaxPasajeros=$cantMaxPasajeros;
            $this->colPasajeros=$colPasajeros;
            $this->responsableV=$responsableV;
            $this->costoViaje=$costoViaje;
            $this->montoAbonado=$montoAbonado;
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

    public function getCostoViaje(){
        return $this->costoViaje;
    }

    public function getMontoAbonado(){
        return $this->montoAbonado;
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
    //Setter para un pasajero específico
    public function setPasajeroColeccion($indice, $valor){
        $this->colPasajeros[$indice] = $valor;
    }

    //Setter para la coleccion de pasajeros
    public function setColPasajeros($colPasajeros){
        $this->colPasajeros=$colPasajeros;
    }

    public function setResponsableV($responsableV){
        $this->responsableV=$responsableV;
    }

    public function setCostoViaje($costoViaje){
        $this->costoViaje=$costoViaje;
    }

    public function setMontoAbonado($montoAbonado){
        $this->montoAbonado=$montoAbonado;
    }

    public function __toString(){
        $cadena = "Código de viaje: " .$this->getCodigo(). 
        ".\n Destino: " .$this->getDestino(). 
        ".\n Cantidad máxima de pasajeros: " .$this->getcantMaxPasajeros().
        ".\n Costo del viaje: " .$this->getCostoViaje().
        ".\n Suma del monto abonado por los pasajeros: " .$this->getMontoAbonado();
        return $cadena;

    }


    //Función que, con el DNI, verifica si el pasajero ya se encuentra en el viaje.
    public function verificarPasajero($dniRecibido){
        $pasajeroExistente = false;
        $i = 0;
        $coleccionPasajeros = $this->getColPasajeros();
        $cantidadPasajeros = count($coleccionPasajeros);
        while ($pasajeroExistente == true && $i<$cantidadPasajeros){
            if ($coleccionPasajeros[$i]->getDni() == $dniRecibido){
                $pasajeroExistente = true;
            } else {
                $i++;
            }
        }
        return $pasajeroExistente;
    }

    public function venderPasaje($objPasajero){
        $pasajeros = $this->getColPasajeros();
        $pasajeros[count($pasajeros)] = $objPasajero;
        $this->setColPasajeros($pasajeros);
        $monto = $this->getMontoAbonado();
        $incremento = $objPasajero->darPorcentajeIncremento();
        $precio = $this->getcostoViaje() * $incremento;
        $montoNuevo = $precio + $this->getMontoAbonado();
        setMontoAbonado($montoNuevo);
        return $precio;
    }
    
    public function hayPasajesDisponible(){
        $pasajerosViaje = count($this->getColPasajeros());
        //Si la cantidad de pasajeros en el viaje es menor a la máxima, devuelve true
        if ($pasajerosViaje < $this->getcantMaxPasajeros()) {
            $hayLugar = true;
        } else {
            $hayLugar = false;
        }
        return $hayLugar;
    }

    }
    /**
     * public function modificarPasajero($indice, $nombre, $apellido, $telefono, $dni){
*  $pasajeroAModificar = $this->getPasajero($indice);
 * $pasajeroAModificar->setNombre($nombre);
  *$pasajeroAModificar->setApellido($apellido);
  *$pasajeroAModificar->setTelefono($telefono);
  *$pasajeroAModificar->setDni($dni);
     */


     /**    public function verificarPasajero($dniRecibido){
     *   $pasajeroExistente = false;
     *   $i = 0;
     *   $coleccionPasajeros = $this->getColPasajeros();
     *   $cantidadPasajeros = count($coleccionPasajeros);
     *   do {
     *       $pasajeroAVerificar = $this->getPasajero($i);
     *       $dniPasajero = $pasajeroAVerificar->getDni();
     *       if ($dniPasajero == $dniRecibido){
     *           $pasajeroExistente = true;
     *       } else {
     *           $i++;
     *       }
     *   } while ($pasajeroExistente == false || $i>$cantidadPasajeros);
     *   return $pasajeroExistente;
    *}
      **/

      /*
    //Retorna el arreglo de la información del pasajero según el índice
    public function getPasajero($indice){
        return $this->colPasajeros[$indice];
    } */
      
