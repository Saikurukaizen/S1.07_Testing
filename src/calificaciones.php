<?php

class Calificaciones{
    public function Calificacion($nota){
        if($nota >= 0.60){
            return 'Ets Primera Divisió';
        }
        elseif($nota >= 0.45 && $nota < 0.60){
            return 'Ets Segona Divisió';
        }
        elseif($nota >= 0.33 && $nota < 0.45){
            return 'Ets Tercera Divisió';
        }
        else{
            return 'Per reprovar';
        }
    }
}

?>