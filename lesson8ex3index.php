<?php
require_once 'Square.php';
require_once 'Rectangle.php';
require_once 'Triangle.php';
require_once 'Circle.php';

$squareObject = new Square();
echo $squareObject->findSquare(5).'<br>';

$rectangleObject = new Rectangle();
echo $rectangleObject->findSquare(5, 7).'<br>';

$triangleObject = new Triangle();
echo $triangleObject->findSquare(4, 4, 5).'<br>';

$circleObject = new Circle();
echo $circleObject->findSquare(5).'<br>';