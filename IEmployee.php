<?php

/**
 * Interface IEmployee
 */
interface IEmployee extends IUser
{
    /**
     * Get salary
     *
     * @return float
     */
    public function getSalary(): float;

    /**
     * Set salary
     *
     * @param float $salary
     *
     * @return float
     */
    public function setSalary(float $salary): float;
}