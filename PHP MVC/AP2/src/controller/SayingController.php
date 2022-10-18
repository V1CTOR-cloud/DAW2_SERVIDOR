<?php

namespace app\controller;
use app\model\SayingModel;
use app\view\sayingView;


class SayingController {

    public function sayings($number){
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
        $sayingModelo = new SayingModel();
        $sayingVista = new sayingView();

        $cache = $sayingModelo->getSayings($number);
        $sayingVista->sayingMostrar($cache);
    }
}
?>