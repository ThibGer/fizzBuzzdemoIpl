<?php


class FizzBuzz
{


    public function count(int $int): string
    {
        if($this->isMultipleOf3($int)) return "Fizz";   //guard
        if($int === 5) return "Buzz";


        //return (string) $int;
        return strval($int);
    }

    public function isMultipleOf3(int $int): bool
    {
        return $int % 3 === 0;
    }


}