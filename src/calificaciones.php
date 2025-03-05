<?php

namespace app;

class Calificaciones{

    private $nota;

    public function __construct($nota){
        $this->nota = $nota;
    }
    public function Aprobado($nota, $notaMaxima){
        if($nota > 0 || $nota > $notaMaxima){
            return false;
        }
        return $nota >= 5;
    }
}


?>