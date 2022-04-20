<?php
include 'Viaje.php';

//Arreglo de Pasajeros.
$arrayPasajeros = [];
$arrayPasajeros[0] = ["nombre"=>"Jorge", "apellido"=>"Gonzales", "nroDocumento"=>13727931];
$arrayPasajeros[1] = ["nombre"=>"Gonzalo", "apellido"=>"Perez", "nroDocumento"=>32845710];
$arrayPasajeros[2] = ["nombre"=>"Pablo", "apellido"=>"Fernandez", "nroDocumento"=>21729034];
$arrayPasajeros[3] = ["nombre"=>"Fernando", "apellido"=>"Diaz", "nroDocumento"=>98374263];
$arrayPasajeros[4] = ["nombre"=>"Cristian", "apellido"=>"Lopez", "nroDocumento"=>40194852];
$arrayPasajeros[5] = ["nombre"=>"Carlos", "apellido"=>"Leiva", "nroDocumento"=>32845721];
$arrayPasajeros[6] = ["nombre"=>"Agustina", "apellido"=>"Sanchez", "nroDocumento"=>32957843];
$arrayPasajeros[7] = ["nombre"=>"Camila", "apellido"=>"Caruso", "nroDocumento"=>33912738];
$arrayPasajeros[8] = ["nombre"=>"Maria", "apellido"=>"Banega", "nroDocumento"=>41893857];

    /* Programa Principal */

        //Bloque de carga de informacion de viaje.
        //****************************************/
        echo "Desea cargar informacion de un viaje?\n";
        $resp = trim(fgets(STDIN));
        if ($resp == "si") {

            echo "Ingrese el codigo de viaje: \n";
            $codiViaje = trim(fgets(STDIN));

            echo "Ingrese el destino del viaje: \n";
            $destViaje = trim(fgets(STDIN));

            echo "Ingrese la cantidad maxima de pasajeros: \n";
            $cantMaxPasajeros = trim(fgets(STDIN));


            $cantPasajActual = count($arrayPasajeros);
            $viaje1 = new Viaje($codiViaje, $destViaje, $cantMaxPasajeros, $cantPasajActual, $arrayPasajeros);


        //Bloque de modificar datos.
        //****************************************/
        echo "Desea modificar los datos del viaje? \n";
        $respMod = trim(fgets(STDIN));
        if ($respMod == "si"){

            echo "Desea modificar el codigo de viaje? \n";
            $respC = trim(fgets(STDIN));
            if ($respC == "si"){

                echo "Ingrese el codigo de viaje nuevo: \n";
                $codViajeMod = trim(fgets(STDIN));
                $viaje1->setCodigoViaje($codViajeMod);

            }

            echo "Desea modificar el destino de viaje? \n";
            $respD = trim(fgets(STDIN));
            if ($respD == "si"){

                echo "Ingrese el destino de viaje nuevo: \n";
                $destViajeMod = trim(fgets(STDIN));
                $viaje1->setDestino($destViajeMod);

            }

            echo "Desea modificar la cantidad maxima de pasajeros? \n";
            $respCMP = trim(fgets(STDIN));
            if ($respCMP == "si"){

                echo "Ingrese el codigo de viaje nuevo: \n";
                $cantMaxPasMod = trim(fgets(STDIN));
                $viaje1->setMaximoPasajeros($cantMaxPasMod);

            }

        }
        //Bloque para modificar datos de un pasajero.
        //*******************************************/
        echo "Desea modificar los datos de un pasajero?\n";
        $respModPas = trim(fgets(STDIN));
        if ($respModPas == "si" ){

            echo "Ingrese el numero de documento del pasajero actual para modificar sus datos: \n";
            $nroDocPasajero = (trim(fgets(STDIN)));

            echo "Datos nuevos \n";

            echo "Ingrese el nombre del pasajero: \n";
            $nombreMod = trim(fgets(STDIN));

            echo "Ingrese el apellido del pasajero: \n";
            $apellidoMod = trim(fgets(STDIN));

            echo "Ingrese el documento del pasajero: \n";
            $documentoMod = trim(fgets(STDIN));

            $viaje1->cambiarDatosUnPasajero($nroDocPasajero, $nombreMod, $apellidoMod, $documentoMod);
        }


        //Bloque para mostrar informacion.
        //*******************************************/
        echo "Datos del viaje: \n".$viaje1->__toString();
        echo "\n";
        
        }

