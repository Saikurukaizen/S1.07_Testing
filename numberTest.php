<?php
//He usado el comando vendor/bin/phpunit --bootstrap vendor\autoload.php numberTest.php en la terminal para correr el test
require 'App/numberChecker.php';

use PHPUnit\Framework\TestCase;
use App\numberChecker;

class numberTest extends TestCase{

    public $numberChecker;

    protected function setUp(): void{
        $this->numberChecker = new numberChecker(6);
    }

    protected function tearDown(): void{
        $this->numberChecker = null;
    }

    public function testIsEven(){
        $this->assertTrue($this->numberChecker->isEven());
    }

    public function testIsPositive(){
        $this->assertTrue($this->numberChecker->isPositive());
    }

    public function testIsPositiveWithZero(){
        $numberChecker = new numberChecker(0);
        $this->assertFalse($numberChecker->isPositive());
    
    }

    public function testIsPositiveWithNegativeNumber(){
        $numberChecker = new numberChecker(-6);
        $this->assertFalse($numberChecker->isPositive());
    }
}

?>