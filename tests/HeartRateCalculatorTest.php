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
     * @dataProvider calculateForMaleDataProvider
     * @param boolean $isMale
     * @param int $age
     * @param float $expected
     * @throws \Exception
     */
    public function test_calculateForMale($isMale, $age, $expected)
    {
        $this->assertEquals(
            $expected,
            (new HeartRateCalculator())
                ->getMax($isMale, $age)
        );
    }

    /**
     * @return array
     */
    public function calculateForMaleDataProvider()
    {
        return [
            [
                true,
                14,
                202.8
            ],
            [
                false,
                14,
                199.2
            ]
        ];
    }

    /**
     * @dataProvider calculateAgeExceptionDataProvider
     * @param boolean $isMale
     * @param integer $age
     * @throws \Exception
     */
    public function test_calculateAgeException($isMale, $age)
    {
        $this->expectException(\Exception::class);
        (new HeartRateCalculator())
            ->getMax($isMale, $age);
    }

    public function calculateAgeExceptionDataProvider()
    {
        return [
            [
                true,
                13
            ],
            [
                false,
                13
            ]
        ];
    }
}