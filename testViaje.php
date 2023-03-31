<?php

include "Viaje.php";

$arregloPasajeros=[];
$arregloPasajeros[0] = ["nombre" => "Hugo", "apellido" => "Rodriguez", "dni" => 43558145];
$arregloPasajeros[1] = ["nombre" => "Felipe", "apellido" => "Juarez", "dni" => 3829485];
$arregloPasajeros[2] = ["nombre" => "Elsa", "apellido" => "Martinez", "dni" => 42558895];
$arregloPasajeros[3] = ["nombre" => "Pepito", "apellido" => "Ayudante", "dni" => 11223344];
$arregloPasajeros[4] = ["nombre" => "Jose", "apellido" => "Anabel", "dni" => 28996575];

$objViaje = new Viaje(155, "Paris",5,$arregloPasajeros);

//Muestra el viaje junto a sus atributos

function cargarViaje($objViaje){
    echo "Código de viaje: " .$objViaje->getCodigo(). "\n";
    echo "Destino: " .$objViaje->getDestino(). "\n";
    echo "Cantidad máxima de pasajeros: " .$objViaje->getCantMaxPasajeros(). "\n";
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
            echo "Seleccione un pasajero del 0 al 4: ";
            $indicePasajero = trim(fgets(STDIN));
            if ($indicePasajero>5){
                do{
                echo "Por favor, ingrese un número válido: ";
                $indicePasajero = trim(fgets(STDIN));
                } while ($indicePasajero>5);
            }
            echo "Nuevo nombre: ";
            $nuevoNombre = trim(fgets(STDIN));
            $objViaje->setPasajero("nombre", $indicePasajero, $nuevoNombre);
            echo "Nuevo apellido: ";
            $nuevoApellido = trim(fgets(STDIN));
            $objViaje->setPasajero("apellido", $indicePasajero, $nuevoApellido);
            echo "Nuevo número de documento: ";
            $nuevoDni = trim(fgets(STDIN));
            $objViaje->setPasajero("documento", $indicePasajero, $nuevoDni);
            echo "El pasajero ha sido modificado. \n";
            menu($objViaje);
    } 
}

function verDatos($objViaje){
    echo "Ingrese un número del 0 al " .($objViaje->getcantMaxPasajeros()-1).": ";
    $indice = trim(fgets(STDIN));
    if ($indice>$objViaje->getcantMaxPasajeros()){
        echo "Ingrese un número válido. ";
        verDatos($objViaje);
    } else {
      //  $datoPasajero = $objViaje->getPasajero($indice);

        echo "Nombre del pasajero: " .$objViaje->getPasajero($indice)["nombre"]. "\n";
        echo "Apellido del pasajero: " .$objViaje->getPasajero($indice)["apellido"]. "\n";
        echo "Número de documento: " .$objViaje->getPasajero($indice)["dni"]. "\n";
        menu($objViaje);
    }
}

function menu($objViaje){
    echo "\n";
    echo "Bienvenido, ingrese la opción que desee ejecutar:\n";
    echo "------------------------------------------------\n";
    echo "1: Cargar información de viaje.\n";
    echo "2: Modificar información de viaje.\n";
    echo "3: Ver datos del pasajero.\n";
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

menu($objViaje);
