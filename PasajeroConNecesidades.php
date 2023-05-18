<?php
class PasajeroConNecesidades extends Pasajero{
    private $necesidades;

    public function __construct(
        $nombre,
        $apellido,
        $dni,
        $telefono,
        $nroAsiento,
        $nroTicket,
        $necesidades
    ) {
        parent:: __construct(
            $nombre,
            $apellido,
            $dni,
            $telefono,
            $nroAsiento,
            $nroTicket
        );
        $this->necesidades=$necesidades;
    }

    public function getNecesidades(){
        return $this->necesidades;
    }

    public function setNecesidades($necesidades){
        $this->necesidades=$necesidades;
    }

    public function darPorcentajeIncremento(){
        $incremento = 1.15;
        if ($this->getNecesidades()>1){
            $incremento = 1.30;
        }
        return $incremento;
    }
}