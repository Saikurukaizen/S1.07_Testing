<?php
declare(strict_types=1);

namespace Tests;
use App\NumberChecker;
use PHPUnit\Framework\TestCase;

final class NumberCheckerTest extends TestCase{

    private ?NumberChecker $numberChecker;

    protected function setUp(): void{
        $this->numberChecker = new NumberChecker(8);
    }

    protected function tearDown(): void{
        $this->numberChecker = null;
    }

    public function testIsEven(): void{
        $this->assertTrue($this->numberChecker->isEven());
        $this->assertTrue($this->numberChecker->isPositive());
    }

    public function testIsPositive(): void{
        $this->assertTrue($this->numberChecker->isEven());
        $this->assertTrue($this->numberChecker->isPositive());

    }
}
?>
