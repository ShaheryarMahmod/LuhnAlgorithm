<?php
namespace ShaheryarMahmod;

/**
 * Luhn Algorithm Implementation.
 *
 * @author    Shaheryar Mahmood
 * @copyright 2020 Shaheryar Mahmood
 * @license   https://unlicense.org/ Unlicense
 */
class LuhnAlgorithm
{
    /**
     * Luhn Algorithm.
     *
     * @param int $number
     * @return int
     */
    private static function algorithm(int $number):int
    {
        $sum = 0;
        foreach (str_split(strrev(substr($number, 0, -1))) as $key => $value) {
            if($key % 2 === 0){
                $multiply = ($value * 2);
                $sum += $multiply >= 10 ? array_sum(str_split($multiply)) : $multiply;
            }else{
                $sum += $value;
            }
        }

        return $sum;
    }

    /**
     * Calculation of check digit.
     *
     * @param int $number Number to calculate checksum 
     * @return int
     */
    public static function checksum(int $number):int
    {
        return 10 - (self::algorithm($number) % 10);
    }

    /**
     * Check if card is valid or not.
     *
     * @param int $number Number to validate.
     * @return bool
     */
    public static function isValid(int $number):bool
    {
        return self::checksum($number) == substr($number, -1) ? true : false;
    }
}
