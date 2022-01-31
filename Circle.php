<?php
class Circle
{
    /**
     * @param float $radius
     * @return float
     */
    public function findSquare(float $radius) : float
    {
        return pi() * pow($radius, 2);
    }
}