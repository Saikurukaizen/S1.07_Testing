<?php
declare(strict_types=1);

namespace App;

class RankingNotas{
    
    private float $nota;

    public function __construct(float $nota){
        $this->nota = $nota;
    }

    public function getNota(): float{
        return $this->nota;
    }

    public function checkPrimeraDivision(): bool{
        return $this->nota >= 0.60;
    }

    public function checkSegundaDivision(): bool{
        return $this->nota >= 0.45 && $this->nota < 0.60;
    }

    public function checkTerceraDivision(): bool{
        return $this->nota >= 0.33 && $this->nota < 0.45;
    }

    public function checkParaReprobar(): bool{
        return $this->nota < 0.33;
    }
}


?>