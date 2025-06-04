<?php
declare(strict_types=1);

namespace Tests;
use App\NumberChecker;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class NumberCheckerTest extends TestCase{

   /*  private ?NumberChecker $numberChecker;

    protected function setUp(): void{
        $this->numberChecker = new NumberChecker(8);
    }

    protected function tearDown(): void{
        $this->numberChecker = null;
    }
 */
    public static function additionNumberCheckerDataProvider(): array{
        return [
            [8, true, true],
            [11, false, true],
            [-6, true, false],
            [-7, false, false]
        ];
    }

    #[DataProvider('NumberCheckerDataProvider')]
    public function testAdd(int $number, bool $isEven, bool $isPositive): void{
        $numberChecker = new NumberChecker($number);
        $this->assertSame($isEven, $numberChecker->isEven());
        $this->assertSame($isPositive, $numberChecker->isPositive());
    }

    /* public function testIsEven(): void{
        $this->assertTrue($this->numberChecker->isEven());
        $this->assertTrue($this->numberChecker->isPositive());
    }

    public function testIsPositive(): void{
        $this->assertTrue($this->numberChecker->isEven());
        $this->assertTrue($this->numberChecker->isPositive());

    } */
}
?>