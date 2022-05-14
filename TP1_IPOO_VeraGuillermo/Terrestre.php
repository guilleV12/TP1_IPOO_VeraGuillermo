<?php
class Terrestre extends Viaje{
    //atributos
    private $tipoAsiento;

    //constructor
    public function __construct($codViaje, $dest, $maxPas, $pasAct, $pasaj, $respV, $impor, $idaVuelta, $tipoA){
        parent::__construct($codViaje, $dest, $maxPas, $pasAct, $pasaj, $respV, $impor, $idaVuelta);
        $this->tipoAsiento = $tipoA;
    }

    //getter
    public function getTipoAsiento(){
        return $this->tipoAsiento;
    }

    //setter
    public function setTipoAsiento($tipoA){
        $this->tipoAsiento = $tipoA;
    }

    //metodos
    public function __toString(){
        $cadena = parent::__toString();
        return $cadena;
    }

    public function venderPasaje($pasajero){
        $importe = $this->getImporte();
        if (parent :: hayPasajesDisponible() == true){
            if (parent ::getIdaYVuelta() == "si"){
                if ($this->getTipoAsiento() == "cama"){
                    $importe = $importe + ($importe / 100 * 25);
                }
                $importe = $importe + ($importe / 100 * 50);
            }
            parent :: setPasajerosActual(count(parent::getPasajeros())+1);
            $colPas = parent :: getPasajeros();
            $colPas[count($colPas)] = $pasajero;
            parent :: setPasajeros($colPas);
        } else {
            $importe = 0;
        }
        return $importe;
    }
}

?>