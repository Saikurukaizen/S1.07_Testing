<?php
declare(strict_types=1);

namespace Tests;
use App\RankingNotas;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class RankingNotasTest extends TestCase{

    #[DataProvider('RankingNotasDataProviderTest::provideRanking')]

    public function testRanking(
        float $nota,
        bool $primeraDivision,
        bool $segundaDivision,
        bool $terceraDivision,
        bool $reprobar): void{
            $ranking = new RankingNotas($nota);
            $this->assertSame($primeraDivision, $ranking->checkPrimeraDivision());
            $this->assertSame($segundaDivision, $ranking->checkSegundaDivision());
            $this->assertSame($terceraDivision, $ranking->checkTerceraDivision());
            $this->assertSame($reprobar, $ranking->checkParaReprobar());
        }
  
}
?>
