<?php

namespace tests;


use PHPUnit\Framework\TestCase;
use src\HeartRateCalculator;

/**
 * Created by PhpStorm.
 * User: acando14
 * Date: 11/01/2019
 * Time: 22:48
 */
class HeartRateCalculatorTest extends TestCase
{
    public function test_instantiateClass()
    {
        $this->assertInstanceOf(
            HeartRateCalculator::class,
            (new HeartRateCalculator())
        );
    }

    /**
     * @throws \Exception
     */
    public function test_calculateForMale()
    {
        $this->assertEquals(
            192.4,
            (new HeartRateCalculator())
            ->getMax(true, 27)
        );
    }
}