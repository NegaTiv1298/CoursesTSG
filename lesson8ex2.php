<?php

class Calculator
{
    /**
     * Sum two numbers
     * @param float $num1
     * @param float $num2
     * @return float
     */
    public function sum(float $num1, float $num2)
    {
        return $num1 + $num2;
    }

    /**
     * Subtraction of two numbers
     * @param float $num1
     * @param float $num2
     * @return float
     */
    public function subtraction(float $num1, float $num2)
    {
        return $num1 - $num2;
    }

    /**
     * Multiplication of two numbers
     * @param float $num1
     * @param float $num2
     * @return float|int
     */
    public function multiplication(float $num1, float $num2)
    {
        return $num1 * $num2;
    }

    /**
     * Division of two numbers
     * @param float $num1
     * @param float $num2
     * @return float|int
     */
    public function division(float $num1, float $num2)
    {
        return $num1 / $num2;
    }
}