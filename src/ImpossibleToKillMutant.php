<?php

namespace src;
/**
 * Created by PhpStorm.
 * User: acando14
 * Date: 18/01/2019
 * Time: 17:06
 */

class ImpossibleToKillMutant
{
    /**
     * Find if the $needle is a, b, c
     * @param $needle
     * @return bool
     */
    public function execute($needle)
    {
        return \in_array($needle, ['a', 'b', 'c'], true);
    }
}