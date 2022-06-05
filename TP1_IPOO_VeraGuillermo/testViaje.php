<?php
include 'Viaje.php';
include 'Pasajero.php';
include 'ResponsableV.php';
include 'Terrestre.php';
include 'Aereo.php';

//instanciacion de objetos Pasajero.
$pasajero1 = new Pasajero("Jorge", "Gonzales", 13727931, 2944121212);
$pasajero2 = new Pasajero("Pablo", "Fernandez", 21729034, 2944232323);
$pasajero3 = new Pasajero("Cristian", "Lopez", 40194852, 2944343434);
$pasajero4 = new Pasajero("Pablo", "Diaz", 98374263, 2944454545);
$pasajero5 = new Pasajero("Carlos", "Perez", 13755931, 2944121299);
$pasajero6 = new Pasajero("Carlos", "Leiva", 32845721, 2944565656);
$pasajero7 = new Pasajero("Agustina", "Sanchez", 32957843, 2944676767);
$pasajero8 = new Pasajero("Camila", "Caruso", 33912738, 2944787878);
$pasajero9 = new Pasajero("Maria", "Banega", 41893857, 2944898989);

//Carga de arreglo de objetos Pasajero.
$arrayPasajeros = [];
$arrayPasajeros[0] = $pasajero1;
$arrayPasajeros[1] = $pasajero2;
$arrayPasajeros[2] = $pasajero3;
$arrayPasajeros[3] = $pasajero4;
$arrayPasajeros[4] = $pasajero5;
$arrayPasajeros[5] = $pasajero6;
$arrayPasajeros[6] = $pasajero7;
$arrayPasajeros[7] = $pasajero8;
$arrayPasajeros[8] = $pasajero9;

    /* Programa Principal */

        //Instanciacion de objeto Viaje.
        //****************************************/
        echo "Desea cargar informacion de un viaje?\n";
        $resp = trim(fgets(STDIN));
        if ($resp == "si") {

            echo "Ingrese el tipo de viaje: \n";
            $tipoViaje = trim(fgets(STDIN));
            if (strtolower($tipoViaje) == "aereo"){
                $claseViaje = "Aereo";

                echo "Ingrese el codigo de viaje: \n";
                $codiViaje = trim(fgets(STDIN));

                echo "Ingrese el destino del viaje: \n";
                $destViaje = trim(fgets(STDIN));

                echo "Ingrese la cantidad maxima de pasajeros: \n";
                $cantMaxPasajeros = trim(fgets(STDIN));

                echo "Ingrese el importe del viaje: \n";
                $importe = trim(fgets(STDIN));
                $cantPasajActual = count($arrayPasajeros);
                $viaje1 = new Aereo($codiViaje, $destViaje, $cantMaxPasajeros, $cantPasajActual, $arrayPasajeros, "", $importe, "", 1, "", "AeroStar", "No");           
            } else {
                $claseViaje = "Terrestre";

                echo "Ingrese el codigo de viaje: \n";
                $codiViaje = trim(fgets(STDIN));

                echo "Ingrese el destino del viaje: \n";
                $destViaje = trim(fgets(STDIN));

                echo "Ingrese la cantidad maxima de pasajeros: \n";
                $cantMaxPasajeros = trim(fgets(STDIN));

                echo "Ingrese el importe del viaje: \n";
                $importe = trim(fgets(STDIN));
                $cantPasajActual = count($arrayPasajeros);
                $viaje1 = new Terrestre($codiViaje, $destViaje, $cantMaxPasajeros, $cantPasajActual, $arrayPasajeros, "", $importe, "","" );
            }

            

        //Switch para ejecutar metodos
        do {    
            echo "\n----Menu opciones:------\n\n";
            echo "1 - modificar datos del viaje\n";
            echo "2 - modificar datos de un pasajero\n";
            echo "3 - agregar un pasajero\n";
            echo "4 - vender un pasaje\n";
            echo "5 - salir del menu\n";
            $varSwitch = trim(fgets(STDIN));
            switch ($varSwitch) {
                case 1:
                    //Metodo modificarViaje objeto Viaje.
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

                            echo "Ingrese la cantidad de pasajeros nueva: \n";
                            $cantMaxPasMod = trim(fgets(STDIN));
                            $viaje1->setMaximoPasajeros($cantMaxPasMod);

                        }

                    }
                    break;

                case 2:
                    //metodo modificarPasajero objeto Pasajero.
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

                        echo "Ingrese el telefono del pasajero: \n";
                        $telefonoMod = trim(fgets(STDIN));

                        $viaje1->cambiarDatosUnPasajero($nroDocPasajero, $nombreMod, $apellidoMod, $telefonoMod);
                    }
                    break;

                case 3:
                        //Metodo agregarPasajero objeto Viaje.
                        //***************************** */
                        echo "Desea agregar un pasajero: \n";
                        $respAgregarPas = trim(fgets(STDIN));
                        if ($respAgregarPas == "si"){
                            echo "Ingrese el numero de documento: \n";
                            $nroDocumentoNuevo = trim(fgets(STDIN));
                    
                                echo "Datos pasajero a agregar \n";
                    
                                echo "Ingrese el nombre del pasajero nuevo: \n";
                                $nombreMod = trim(fgets(STDIN));
                    
                                echo "Ingrese el apellido del pasajero nuevo: \n";
                                $apellidoMod = trim(fgets(STDIN));
                    
                                echo "Ingrese el telefono del pasajero nuevo: \n";
                                $telefonoMod = trim(fgets(STDIN));
                                
                                $viaje1->agregarPasajero($nroDocumentoNuevo, $nombreMod, $apellidoMod, $telefonoMod);
                        }

                    break;

                case 4:
                        //Metodo venderPasaje
                        //****************** */
                        echo "Desea vender un pasaje?: \n";
                        $respVenderPasaje = trim(fgets(STDIN));
                        if ($respVenderPasaje == "si"){
   
                            echo "Es de ida y vuelta?: \n";
                            $idaYVuel = trim(fgets(STDIN));
                            $viaje1->setIdaYVuelta($idaYVuel);

                                if (strtolower($tipoViaje) == "aereo"){
                                    echo "Categoria de asiento?: \n";
                                    $categAsiento = trim(fgets(STDIN));
                                    $viaje1->setCategoriaAsiento($categAsiento);

                                    echo "Tiene escalas?: \n";
                                    $escalas = trim(fgets(STDIN));
                                    $viaje1->setEscalas($escalas);

                                } else {
                                    $claseViaje = "Terrestre";

                                    echo "Tipo de asiento?: \n";
                                    $asientoTipo = trim(fgets(STDIN));
                                    $viaje1->setTipoAsiento($asientoTipo);

                                }

                            
                                    //vender pasaje
                                    echo "\n-------------Vender pasaje-----------\n";

                                    echo "Ingrese el numero de documento: \n";
                                        $nroDocVenta = trim(fgets(STDIN));
                                                
                                        echo "Datos pasajero a agregar \n";
                                                
                                        echo "Ingrese el nombre del pasajero nuevo: \n";
                                        $nombreVenta = trim(fgets(STDIN));
                                                
                                        echo "Ingrese el apellido del pasajero nuevo: \n";
                                        $apellidoVenta = trim(fgets(STDIN));
                                                
                                        echo "Ingrese el telefono del pasajero nuevo: \n";
                                        $telefonoVenta = trim(fgets(STDIN));
                                    
                                    $pasajeroVenta = new Pasajero($nombreVenta, $apellidoVenta, $nroDocVenta, $telefonoVenta);

                                    $impPasaje = $viaje1->venderPasaje($pasajeroVenta);

                                    echo "\n------importe del pasaje--------\n";
                                    echo $impPasaje;

                        }

                    break;

                default:
                    break;
            }
        } while ($varSwitch != 5);
        
        //Instanciacion objeto responsable.
        //***************************** */
        echo "\n--------Datos del responsable del viaje--------\n\n";
        echo "Ingrese el numero de empleado: \n";
        $numEmpleado = trim(fgets(STDIN));
        echo "Ingrese el numero licencia: \n";
        $numLicencia = trim(fgets(STDIN));
        echo "Ingrese el nombre: \n";
        $nombreEmpleado = trim(fgets(STDIN));
        echo "Ingrese el apellido: \n";
        $apellidoEmpleado = trim(fgets(STDIN));
        $responsable1 = new ResponsableV($numEmpleado, $numLicencia, $nombreEmpleado, $apellidoEmpleado);
        $viaje1->setResponsableViaje($responsable1);




        //__toString de la clase viaje
        echo "\n---------------Datos del viaje:------------------\n";
        echo $viaje1->__toString();

        }