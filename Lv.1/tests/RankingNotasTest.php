<?php
declare(strict_types=1);

namespace Tests;
use App\RankingNotas;
use PHPUnit\Framework\TestCase;

class RankingNotasTest extends TestCase{

    private ?RankingNotas $ranking;

    public function testCheckPrimeraDivision(): void{
        $this->ranking = new RankingNotas(0.60);
        $this->assertTrue($this->ranking->checkPrimeraDivision());
        $this->assertFalse($this->ranking->checkSegundaDivision());
        $this->assertFalse($this->ranking->checkTerceraDivision());
        $this->assertFalse($this->ranking->checkParaReprobar());
    }

    public function testCheckSegundaDivision(): void{
        $this->ranking = new RankingNotas(0.45);
        $this->assertFalse($this->ranking->checkPrimeraDivision());
        $this->assertTrue($this->ranking->checkSegundaDivision());
        $this->assertFalse($this->ranking->checkTerceraDivision());
        $this->assertFalse($this->ranking->checkParaReprobar());
    }

    public function testCheckTerceraDivision(): void{
        $this->ranking = new RankingNotas(0.33);
        $this->assertFalse($this->ranking->checkPrimeraDivision());
        $this->assertFalse($this->ranking->checkSegundaDivision());
        $this->assertTrue($this->ranking->checkTerceraDivision());
        $this->assertFalse($this->ranking->checkParaReprobar());
    }

    public function testCheckParaReprobar(): void{
        $this->ranking = new RankingNotas(0.32);
        $this->assertFalse($this->ranking->checkPrimeraDivision());
        $this->assertFalse($this->ranking->checkSegundaDivision());
        $this->assertFalse($this->ranking->checkTerceraDivision());
        $this->assertTrue($this->ranking->checkParaReprobar());
    }
}
?>
