<?php
declare(strict_types=1);

namespace Tests;
use App\RankingNotas;
use PHPUnit\Framework\TestCase;

class RankingNotasTest extends TestCase{

    private ?RankingNotas $ranking;

    /* protected function setUp(): void{
        $this->ranking = new RankingNotas(1.00);
    }

    protected function tearDown(): void{
        $this->ranking = null;
    } */

    public function testCheckPrimeraDivision(): void{
            $this->ranking = new RankingNotas(0.60);
        $this->assertTrue($this->ranking->checkPrimeraDivision());   
    }

    public function testCheckSegundaDivision(): void{
        $this->ranking = new RankingNotas(0.45);
        $this->assertTrue($this->ranking->checkSegundaDivision());
    }

    public function testCheckTerceraDivision(): void{
        $this->ranking = new RankingNotas(0.33);
        $this->assertTrue($this->ranking->checkTerceraDivision());
    }

    public function testCheckParaReprobar(): void{
        $this->ranking = new RankingNotas(0.32);
        $this->assertTrue($this->ranking->checkParaReprobar());
    }
}
?>