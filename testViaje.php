<?php

include_once "Viaje.php";
include_once "ResponsableV.php";
include_once "Pasajero.php";
include_once "PasajeroVIP.php";

$pasajero1 = new Pasajero("Nico", "Gonzalez", 44778595, 2995054040, 1, 23);
$pasajero2 = new Pasajero("Jorge", "Martinez", 42560876, 2994042288, 2, 50);
$pasajero3 = new Pasajero("Santiago", "Troche", 40750250, 2991337474, 3, 100);
$arregloPasajeros=[];
$arregloPasajeros[0] = $pasajero1;
$arregloPasajeros[1] = $pasajero2;
$arregloPasajeros[2] = $pasajero3;

$objResponsable = new ResponsableV(1337, 150, "Franco", "Hernandez");
$objViaje = new Viaje(155, "Paris",3, $arregloPasajeros, $objResponsable, 5000, 20000);

//Muestra el viaje junto a sus atributos

function cargarViaje($objViaje){
    echo "Información del viaje: \n";
    echo $objViaje. "\n";
    echo "---------------------------------- \n";
    echo "Información del responsable del viaje: \n";
    echo $objViaje->getResponsableV(). "\n";
    menu($objViaje);
}

//Menú para modificar los datos del viaje

function modificarViaje($objViaje){
    echo "\n";
    echo "-------------------------------------\n";
    echo "Elija los datos que quiera modificar: \n";
    echo "1: Código de viaje. \n";
    echo "2: Destino. \n";
    echo "3: Cantidad máxima de pasajeros. \n";
    echo "4: información de un pasajero. \n";
    echo "5: Agregar un pasajero. \n";
    $opcionCambio = trim(fgets(STDIN));
    switch($opcionCambio){
        case 1:
            echo "Escriba el nuevo código de viaje: ";
            $nuevoValor = trim(fgets(STDIN));
            $objViaje->setCodigo($nuevoValor);
            echo "El código ha sido sobrescrito.";
            menu($objViaje);
            break;
        case 2:
            echo "Elija el nuevo destino: ";
            $nuevoValor = trim(fgets(STDIN));
            $objViaje->setDestino($nuevoValor);
            echo "El destino ha sido cambiado.";
            menu($objViaje);
            break;
        case 3:
            echo "Indique la nueva cantidad máxima de pasajeros: ";
            $nuevoValor = trim(fgets(STDIN));
            $objViaje->setcantMaxPasajeros($nuevoValor);
            echo "La cantidad máxima de pasajeros fue restablecida. \n";
            menu($objViaje);
            break;
        case 4:
            echo "Seleccione un pasajero del 0 al 2: ";
            $indicePasajero = trim(fgets(STDIN));
            if ($indicePasajero>2){
                do{
                echo "Por favor, ingrese un número válido: ";
                $indicePasajero = trim(fgets(STDIN));
                } while ($indicePasajero>2);
            }
            $pasajeroAModificar = $objViaje->getPasajero($indicePasajero);
            echo "Nuevo nombre: ";
            $nuevoNombre = trim(fgets(STDIN));
            $pasajeroAModificar->setNombre($nuevoNombre);
            echo "Nuevo apellido: ";
            $nuevoApellido = trim(fgets(STDIN));
            $pasajeroAModificar->setApellido($nuevoApellido);
            echo "Nuevo número de teléfono: ";
            $nuevoTelefono = trim(fgets(STDIN));
            $pasajeroAModificar->setTelefono($nuevoTelefono);
            echo "Nuevo DNI: ";
            $nuevoDni = trim(fgets(STDIN));
            $pasajeroAModificar->setDni($nuevoDni);
            echo "El pasajero ha sido modificado. \n";
            menu($objViaje);
            break;
        case 5:
            echo "Ingrese el número de documento del nuevo pasajero: ";
            $dniP = trim(fgets(STDIN));
            $verificacion = $objViaje->verificarPasajero($dniP);
            if ($verificacion == true){
                echo "El pasajero ya se encuentra en el viaje.";
                menu($objViaje);
            } else {
                echo "Ingrese el nombre del pasajero: ";
                $nombreP = trim(fgets(STDIN));
                echo "Ingrese el apellido del pasajero: ";
                $apellidoP = trim(fgets(STDIN));
                echo "Escriba el número de teléfono del pasajero: ";
                $telefonoP = trim(fgets(STDIN));
                echo "Escriba el número de asiento: ";
                $nroAsientoP = trim(fgets(STDIN));
                echo "Ingrese el número de ticket: ";
                $nroTicketP = trim(fgets(STDIN));
                $pasajeroAgregado = new Pasajero($nombreP, $apellidoP, $dniP, $telefonoP, $nroAsientoP, $nroTicketP);
                $coleccionPasajeros = $objViaje->getColPasajeros();
                $coleccionPasajeros[] = $pasajeroAgregado;
                $objViaje->setColPasajeros($coleccionPasajeros);
                echo "Se ha agregado el pasajero correctamente.";
                menu($objViaje);
            }
          
    } 
}

function verDatos($objViaje){
    $pasajeros = count($objViaje->getColPasajeros()) - 1;
    echo "Ingrese un número del 0 al " .$pasajeros.": ";
    $indice = trim(fgets(STDIN));
    if ($indice>$pasajeros){
        echo "Ingrese un número válido. ";
        verDatos($objViaje);
    } else {
        $mostrarPasajero = $objViaje->getPasajero($indice);
        echo $mostrarPasajero;
        menu($objViaje);
    }
}

function venderPasaje($pasajero){
    $pasajeDisponible = $this->hayPasajesDisponible();
    if ($pasajeDisponible == false){
        echo "No hay pasajes disponibles.";
        menu($objViaje);
    } else {
        
    }
}
function menu($objViaje){
    echo "\n";
    echo "Bienvenido, ingrese la opción que desee ejecutar:\n";
    echo "------------------------------------------------\n";
    echo "1: Cargar información de viaje.\n";
    echo "2: Modificar información de viaje.\n";
    echo "3: Ver datos del pasajero.";
    $opcion = trim(fgets(STDIN));
    switch($opcion){
        case 1:
            cargarViaje($objViaje);
            break;
        case 2:
            modificarViaje($objViaje);
            break;
        case 3:
            verDatos($objViaje);
            break;
        default:
            menu($objViaje);
    }
}
//Ejecución del menú
menu($objViaje);





/**Borradores 
 * función ModificarViaje, case 5:
 * 
 *            $nuevoNombre = trim(fgets(STDIN));
            $objViaje->Col("nombres", $indicePasajero, $nuevoNombre);
            echo "Nuevo apellido: ";
            $nuevoApellido = trim(fgets(STDIN));
            $objViaje->Col("apellido", $indicePasajero, $nuevoApellido);
            echo "Nuevo número de documento: ";
            $nuevoDni = trim(fgets(STDIN));
            $objViaje->Col("documento", $indicePasajero, $nuevoDni);
            echo "El pasajero ha sido modificado. \n";
            menu($objViaje);

            Función cargarViaje

    function cargarViaje($objViaje, $objResponsable){
    echo "Información del viaje: \n";
    echo "Código de viaje: " .$objViaje->getCodigo(). "\n";
    echo "Destino: " .$objViaje->getDestino(). "\n";
    echo "Cantidad máxima de pasajeros: " .$objViaje->getCantMaxPasajeros(). "\n";
    echo "----------------------------------- \n";
    echo "Información del responsable del viaje: \n";
    echo "Nombre: " .$objResponsable->getNombre. "\n";
    echo "Apellido: " .$objResponsable->getApellido. "\n";
    echo "Número de licencia: " .$objResponsable->getNroLicencia. "\n";
    "Número de empleado: " .$objResponsable->getNroEmpleado. "\n";
    menu($objViaje);

            case 4:
            $objViaje->venderPasaje($objPasajero)
     */


    
