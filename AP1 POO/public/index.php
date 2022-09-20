<?php
    require_once '../vendor/autoloader.php'; 
    $valor = $_GET['action'];

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
            $number = $_GET['number'];
            $saying = new SayingController();
            $saying->sayings($number);
        break;

        default:
            echo "Error: unknown action " . $valor;
        break;
    }
