<?php
    require('model.php');
    require('view.php');
    $valor = $_GET['action'];
    $number = $_GET['number'];

    switch($valor){
        case "hello":
            echo "Hello" . "\t" . date("h:i:s", time());
        break;

        case "bye":
            echo "Bye" . "\t" . date("h:i:s", time());
        break;

        case "saying":

            $sayings =[
                "A quien madruga, Dios le ayuda",
                "No hay mal que por bien no venga",
                "De tal palo, tal astilla",
                "En casa del herrero cuchara de palo",
                "El que no corre, vuela",
                "A lo hecho, pecho",
                "Ojo por ojo, diente por diente",
                "A rey muerto, rey puesto"
            ];
            /* $pos =  rand(1,count($sayings) -1);
            echo "\n". $sayings[$pos]; */


            for ($i=0; $i < count($sayings); $i++) { 
                if ($number == $i) {
                    echo $sayings[$i];
                }
            }

        break;

        default:
            echo "Error: unknown action " . $valor;
        break;
    }    
?>