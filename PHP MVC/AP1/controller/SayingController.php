<?php
require_once '../model/SayingModel.php';
require_once '../view/SayingView.php';

function sayings($number){
    //random number
    /* $pos =  rand(1,count($sayings) -1);
    echo "\n". $sayings[$pos]; */

    // acceso Array
    /* for ($i=0; $i < count(getSayings($number)); $i++) { 
        if ($number == $i) {
            echo getSayings($number)[$i];
        }
    } */

    //pos
    $cache = getSayings($number);
    sayingView($cache);
}
