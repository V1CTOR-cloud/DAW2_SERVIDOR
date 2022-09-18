<?php
function autoloadingController($className){
    $ruta = require_once __DIR__ ."../controller/${className}.php";
    if(file_exists($ruta)){
        require_once __DIR__ ."../controller/${className}.php";
    }else{

    }
}

function autoloadingModel($className){
    $ruta = require_once __DIR__ ."../model/${className}.php";
    if(file_exists($ruta)){
        require_once __DIR__ ."../controller/${className}.php";
    }else{

    }
}

function autoloadingView($className){
    $ruta = require_once __DIR__ ."../view/${className}.php";
    if(file_exists($ruta)){
        require_once __DIR__ ."../view/${className}.php";
    }else{

    }
}

spl_autoload_register("autoloadingController");
spl_autoload_register("autoloadingModel");
spl_autoload_register("autoloadingView");
?>