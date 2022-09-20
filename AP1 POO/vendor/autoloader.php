<?php
function autoloadingController($className){
    $ruta =  __DIR__ ."/../controller/${className}.php";
    if(file_exists($ruta)){
        require_once __DIR__ ."/../controller/${className}.php";
    }
}

function autoloadingModel($className){
    $ruta =  __DIR__ ."/../model/${className}.php";
    if(file_exists($ruta)){
        require_once __DIR__ ."/../model/${className}.php";
    }
}

function autoloadingView($className){
    $ruta =  __DIR__ ."/../view/${className}.php";
    if(file_exists($ruta)){
        require_once __DIR__ ."/../view/${className}.php";
    }
}
spl_autoload_register("autoloadingController");
spl_autoload_register("autoloadingModel");
spl_autoload_register("autoloadingView");
?>