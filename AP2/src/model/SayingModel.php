<?php
class SayingModel {
    public function getSayings($number) {
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
        return $sayings[$number];
    }
}
?>