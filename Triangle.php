<?php
class Triangle
{
    /**
     * @param float $a
     * @param float $b
     * @param float $c
     * @return float
     */
    public function findSquare(float $a, float $b, float $c) : float
    {
        $p = ($a + $b + $c) / 2;
        return sqrt($p * ($p - $a) * ($p - $b) * ($p - $c));
    }
}