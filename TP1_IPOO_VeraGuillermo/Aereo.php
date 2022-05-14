<?php
class Aereo extends Viaje{
    //atributos
    private $numVuelo;
    private $categoriaAsiento;
    private $nombAerolinea;
    private $escalas;

    //constructor
    public function __construct($codViaje, $dest, $maxPas, $pasAct, $pasaj, $respV, $impor, $idaVuelta, $numVuel, $catA, $nomA, $esc){
        parent::__construct($codViaje, $dest, $maxPas, $pasAct, $pasaj, $respV, $impor, $idaVuelta);
        $this->numVuelo = $numVuel;
        $this->categoriaAsiento = $catA;
        $this->nombAerolinea = $nomA;
        $this->escalas = $esc;
    }

    //getter
    public function getNumVuelo() {
        return $this->numVuelo;
    }

    public function getCategoriaAsiento() {
        return $this->categoriaAsiento;
    }

    public function getNombAerolinea() {
        return $this->nombAerolinea;
    }

    public function getEscalas(){
        return $this->escalas;
    }

    //setter
    public function setNumVuelo($nro) {
        $this->numVuelo = $nro;
    }

    public function setCategoriaAsiento($cat) {
        $this->categoriaAsiento = $cat;
    }

    public function setNombAerolinea($nom) {
        $this->nombAerolinea = $nom;
    }

    public function setEscalas($nro){
        $this->escalas = $nro;
    }

    //metodos
    public function __toString(){
        $cadena = parent :: __toString();
        $cadena .= "\n---------------Vuelo-----------\n\nNumero de vuelo: ".$this->getNumVuelo()
        .", escalas: ".$this->getEscalas().". Aerolinea: ".$this->getNombAerolinea();
        return $cadena;
    }

    public function venderPasaje($pasajero){
        $importe = $this->getImporte();
        if (parent :: hayPasajesDisponible() == true){
            if (parent :: getIdaYVuelta()=="si"){
                if ($this->getCategoriaAsiento() == "primera"){
                    if ($this->getEscalas() == "no"){
                        $importe = $importe + ($importe / 100 * 40);
                    } else{
                        $importe = $importe + ($importe / 100 * 60);
                    }
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