<?php
declare(strict_types=1);

namespace Tests;
use App\NumberChecker;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class NumberCheckerTest extends TestCase{

    public static function additionNumberCheckerDataProvider(): array{
        return [
            [8, true, true],
            [11, false, true],
            [-6, true, false],
            [-7, false, false]
        ];
    }

    #[DataProvider('additionNumberCheckerDataProvider')]
    public function testAdd(int $number, bool $isEven, bool $isPositive): void{
        $numberChecker = new NumberChecker($number);
        $this->assertSame($isEven, $numberChecker->isEven());
        $this->assertSame($isPositive, $numberChecker->isPositive());
    }
}
?>
