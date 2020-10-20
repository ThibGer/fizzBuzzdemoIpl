<?php
require "vendor/autoload.php";
require "FizzBuzz.php";

use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends PHPUnit_Framework_TestCase
{

    private $fizzBuzz;

    protected function setUp(): void
    {
        parent::setUp();
        $this->fizzBuzz = new FizzBuzz();
    }


    public function test_Count_Given1_shouldReturn1() {
        //Arrange      on prepare nos variable et outils pour le test
        /*$fizzBuzz = new FizzBuzz();*/

        //Act
        $actual = $fizzBuzz->count(1);

        //Assert
        $this->assertEquals("1", $actual);
        //$this->assertEquals(true, true);
    }

    public function test_count_given2_schouldReturn2() {
        $fizzBuzz = new FizzBuzz();

        $actual = $fizzBuzz->count(2);

        $this->assertEquals("2", $actual);
    }

    public function test_count_given3_schouldReturnFizz() {
        $actual = $this->fizzBuzz->count(3);

        $this->assertEquals("Fizz", $actual);
    }

    public function test_count_given4_schouldReturnFizz() {
        $actual = $this->fizzBuzz->count(4);

        $this->assertEquals("4", $actual);
    }

    public function test_count_given5_schouldReturnBuzz() {
        $actual = $this->fizzBuzz->count(5);

        $this->assertEquals("Buzz", $actual);
    }

    public function test_count_given6_schouldReturnFizz() {
        $actual = $this->fizzBuzz->count(6);

        $this->assertEquals("Fizz", $actual);
    }

    private function actCount(): string {
        return $this->fizzBuzz->count($int);
    }

}
