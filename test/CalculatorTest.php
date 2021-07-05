<?php

use \PHPUnit\Framework\TestCase;

spl_autoload_register(function ($class_name) {
    include $class_name . ".php";
});

class CalculatorTest extends TestCase
{
    const STRING_COMPLEX_Z1 = '10-10i';
    const STRING_COMPLEX_Z2 = '4+2i';

    private Calculator $calculator;

    protected function setUp(): void
    {
        $this->calculator = new Calculator();
        parent::setUp();
    }

    public function testCalculate()
    {
        $z1 = Complex::createByString(self::STRING_COMPLEX_Z1);
        $z2 = Complex::createByString(self::STRING_COMPLEX_Z2);

        $this->assertEquals('14-8i', (string)$this->calculator->add($z1, $z2));
        $this->assertEquals('6-12i', (string)$this->calculator->sub($z1, $z2));
        $this->assertEquals('60-20i', (string)$this->calculator->mul($z1, $z2));
        $this->assertEquals('1-3i', (string)$this->calculator->div($z1, $z2));
    }
}