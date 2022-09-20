<?php
    require_once '../vendor/autoloader.php'; 
    $valor = $_GET['action'];
    $number = $_GET['number'];

    switch($valor){
        case "hello":
            $hello = new HelloController();
            $hello->hello();
        break;

        case "bye":
            $bye = new ByeController();
            $bye->bye();
        break;

        case "saying":
            $saying = new SayingController();
            $saying->sayings($number);
        break;

        default:
            echo "Error: unknown action " . $valor;
        break;
    }
