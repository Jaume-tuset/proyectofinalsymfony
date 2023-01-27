<?php

namespace App\Service;

class DadesPeixos{
    private $peixos = array(
        array(
            "codi" => "1",
            "nom" => "Tauró Blanc",
            "nomcientific" => "Carcharodon carcharias",
            "img" => "imatges/tauroblanc.jpg",
            "informacio" => "Sembla que els taurons es comuniquen mitjançant moviments a l'aigua. Poden fer xocar la cua amb la superfície de l'aigua en senyal d'agressivitat." 
        ),
        array(
            "codi" => "2",
            "nom" => "peix espasa",
            "nomcientific" => "Xiphias gladius",
            "img" => "imatges/peixespasa.jpg",
            "informacio" => "Generalment solitari, de vegades en petits grups. Efectua migracions entre aigües temperades, on s'alimenta, i aigües fredes, on es reprodueix." 
        ),
        array(
            "codi" => "3",
            "nom" => "Sardina",
            "nomcientific" => "Sardina pilchardus",
            "img" => "imatges/sardina.jpg",
            "informacio" => "És un peix molt abundant i força consumit que forma moles grans. Realitza grans migracions i es troben a prop de la superfície o en aigües més fondes però no a gran profunditat." 
        ),
        array(
            "codi" => "4",
            "nom" => "tonyina",
            "nomcientific" => "Thunnus thynnus",
            "img" => "imatges/tonyina.jpg",
            "informacio" => "La tonyina, i altres peixos que es troben a la part superior de la cadena tròfica, acumulen mercuri sota la forma de metilmercuri." 
        ),
    );

    public function get(){
        return $this->peixos;
    }
}

?>