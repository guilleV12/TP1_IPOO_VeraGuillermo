<?php

class Viaje{
    //atributos
    private $codigoViaje;
    private $destino;
    private $maximoPasajeros;
    private $pasajerosActual;
    private $pasajeros;

    
    public function __construct($codViaje, $dest, $maxPas, $pasAct, $pasaj){
        $this->codigoViaje = $codViaje;
        $this->destino = $dest;
        $this->maximoPasajeros = $maxPas;
        $this->pasajerosActual = $pasAct;
        $this->pasajeros = $pasaj;
    }

    public function setCodigoViaje($cod){
        $this->codigoViaje = $cod;
    }

    public function getCodigoViaje(){
        return $this->codigoViaje;
    }

    public function setDestino($d){
        $this->destino = $d;
    }

    public function getDestino(){
        return $this->destino;
    }

    public function setMaximoPasajeros($max){
        $this->maximoPasajeros = $max;
    }

    public function getMaximoPasajeros(){
        return $this->maximoPasajeros;
    }

    public function getPasajerosActual(){
        return $this->pasajerosActual;
    }

    public function setPasajeros($pasaj){
        $this->pasajeros = $pasaj;
    }

    public function getPasajeros(){
        return $this->pasajeros;
    }

    public function __toString() {
        return "Codigo de viaje: ".$this->getCodigoViaje().", Destino: ".$this->getDestino().
        ".\nCantidad maxima de pasajeros: ".$this->getMaximoPasajeros().", Pasajeros actuales en el viaje: ".$this->getPasajerosActual().
        ".";
    }

    public function mostrarPasajeros(){
        $arrayPas = [];
        $arrayPas = $this->getPasajeros();
        $countPas = $this->getPasajerosActual();

        for ($i=0; $i < $countPas; $i++) { 
            echo "Nombre: ".$arrayPas[$i]["nombre"].", Apellido: ".$arrayPas[$i]["apellido"].". Documento: ".$arrayPas[$i]["nroDocumento"].".\n";
        }
    }

    /** metodo que permite modificar los datos de un pasajero 
     * @param int $numPas, $doc
     * @param string $nom, $ape
     * @return void
    */
    public function cambiarDatosUnPasajero($numPas, $nom, $ape, $doc){
        $arrPasajeros = [];
        $arrPasajeros = $this->getPasajeros();
        $arrPasajeros[$numPas]["nombre"] = $nom;
        $arrPasajeros[$numPas]["apellido"] = $ape;
        $arrPasajeros[$numPas]["nroDocumento"] = $doc;
        $this->setPasajeros($arrPasajeros);
    }

}