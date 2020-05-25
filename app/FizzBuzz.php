<?php


namespace App;


class FizzBuzz
{
    function say($number = ''): string
    {
        $number = intval($number);
        if ($number < 0 || empty($number)) {
            return 'Say a number from 1 to ' . PHP_INT_MAX . ' [?n=number]';
        }

        return $number % 15 ? $number % 3 ? $number % 5 ? $number : 'Buzz' : 'Fizz' : 'Fizz Buzz';
    }
}
