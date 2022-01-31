<?php
require_once 'lesson8ex2.php';

$calculatorObject = new Calculator();

echo $calculatorObject->sum(2,3).'<br>';

echo $calculatorObject->subtraction(10,3).'<br>';

echo $calculatorObject->multiplication(2,3).'<br>';

echo $calculatorObject->division(5,2).'<br>';
