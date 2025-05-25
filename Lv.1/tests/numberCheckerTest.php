<?php
declare(strict_types=1);

namespace App\Tests;
use App\NumberChecker;
use PHPUnit\Framework\TestCase;

final class NumberCheckerTest extends TestCase{

    private NumberChecker $numberChecker;

    protected function setUp(): void{
        $this->numberChecker = new NumberChecker(8);
    }

    public function testIsEven(): void{
        $this->assertTrue($this->numberChecker->isEven());
    }

    public function testIsPositive(): void{
        $this->assertTrue($this->numberChecker->isPositive());
    }
}
?>