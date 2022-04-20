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
        ".\n".$this->mostrarPasajeros();
    }

    public function mostrarPasajeros(){
        $arrayPas = [];
        $arrayPas = $this->getPasajeros();
        $countPas = $this->getPasajerosActual();
        echo "Datos de pasajeros: \n";
        for ($i=0; $i < $countPas; $i++) { 
            echo "Nombre: ".$arrayPas[$i]["nombre"].", Apellido: ".$arrayPas[$i]["apellido"].". Documento: ".$arrayPas[$i]["nroDocumento"].".\n";
        }
    }

    /** metodo que permite modificar los datos de un pasajero 
     * @param int $nroDocPas, $doc
     * @param string $nom, $ape
     * @return void
    */
    public function cambiarDatosUnPasajero($nroDocPas, $nom, $ape, $doc){
        $arrPasajeros = [];
        $arrPasajeros = $this->getPasajeros();
        $cantPasajeros = $this->getPasajerosActual();
        $i = 0;
        $bandera = false;
        $indiceModificar = null;
        while ($i < $cantPasajeros && $bandera == false){
            if ($nroDocPas == $arrPasajeros[$i]["nroDocumento"]){
                $bandera = true;
                $indiceModificar = $i;
            }
            $i++;
        }
        if ($i <= $cantPasajeros){
            $arrPasajeros[$indiceModificar]["nombre"] = $nom;
            $arrPasajeros[$indiceModificar]["apellido"] = $ape;
            $arrPasajeros[$indiceModificar]["nroDocumento"] = $doc;
            $this->setPasajeros($arrPasajeros);
        } else {
            echo "\nNo hay un pasajero con ese numero de documento\n";
        }
    }

}