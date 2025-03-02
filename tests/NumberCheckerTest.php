<?php

namespace App\Tests;

use App\NumberChecker;
use PHPUnit\Framework\TestCase;


class NumberCheckerTest extends TestCase{

    private $numberChecker;

    protected function setUp(): void{
        $this->numberChecker = new NumberChecker(6);
    }

    protected function tearDown(): void{
        $this->numberChecker = null;
    }

    public function testIsEven(): void{
        $this->assertTrue($this->numberChecker->isEven());
    }

    public function testIsPositive(){
        $this->assertTrue($this->numberChecker->isPositive());
    }

    public function testIsPositiveWithZero(): void{
        $numberChecker = new NumberChecker(0);
        $this->assertFalse($numberChecker->isPositive());
    
    }

    public function testIsPositiveWithNegativeNumber(){
        $numberChecker = new NumberChecker(-6);
        $this->assertFalse($numberChecker->isPositive());
    }
}

?>