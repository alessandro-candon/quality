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

    /**
     * @throws \Exception
     */
    public function test_calculateForFemale()
    {
        $this->assertEquals(
            190.1,
            (new HeartRateCalculator())
                ->getMax(false, 27)
        );
    }

    /**
     * @throws \Exception
     */
    public function test_calculateAgeException()
    {
        $this->expectException(\Exception::class);
        (new HeartRateCalculator())
            ->getMax(false, 10);
    }
}