<?php
    $valor = $_GET['action'];
    $number = $_GET['number'];

    switch($valor){
        case "hello":
            require "../controller/HelloControler.php";
            hello();
        break;

        case "bye":
            require "../controller/ByeController.php";
            bye();
        break;

        case "saying":
            require "../controller/SayingController.php";
            sayings($number);
        break;

        default:
            echo "Error: unknown action " . $valor;
        break;
    }    
?>