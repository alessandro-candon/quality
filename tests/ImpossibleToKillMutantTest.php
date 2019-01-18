<?php

namespace tests;

use PHPUnit\Framework\TestCase;
use src\ImpossibleToKillMutant;

/**
 * Created by PhpStorm.
 * User: acando14
 * Date: 18/01/2019
 * Time: 17:08
 */

class ImpossibleToKillMutantTest extends TestCase
{
    /**
     * @dataProvider executeDataProvider
     * @param string $needle
     * @param boolean $expected
     */
    public function test_execute($needle, $expected)
    {
        $this->assertEquals(
            $expected,
            (new ImpossibleToKillMutant())
                ->execute($needle)
        );
    }

    /**
     * @return array
     */
    public function executeDataProvider()
    {
        return [
            [
                'a',
                true
            ],
            [
                'b',
                true
            ],
            [
                'c',
                true
            ],
            [
                'f',
                false
            ]
        ];
    }
}