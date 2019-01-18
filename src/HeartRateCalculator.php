<?php

namespace src;

/**
 * Class HeartRateCalculator
 * @package src
 */
class HeartRateCalculator
{
    /**
     * @param bool $isMale
     * @param int $age
     * @return float|int
     * @throws \Exception
     */
    public function getMax(bool $isMale, int $age)
    {
        if ($age > 13) {
            if (true === $isMale) {
                return 214 - 0.8 * $age;
            } else {
                return 209 - 0.7 * $age;
            }
        }
        throw new \Exception('Age not valid');
    }
}
