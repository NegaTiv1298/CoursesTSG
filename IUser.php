<?php

/**
 * Interface IUser
 */
interface IUser
{
    /**
     * Get name
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Set name
     *
     * @param string $name
     *
     * @return string
     */
    public function setName(string $name): string;

    /**
     * Get age
     *
     * @return int
     */
    public function getAge(): int;

    /**
     * Set age
     *
     * @param int $age
     *
     * @return int
     */
    public function setAge(int $age): int;

    /**
     * Get gender
     *
     * @return string
     */
    public function getGender(): string;

    /**
     * Set gender
     *
     * @param string $gender
     *
     * @return string
     */
    public function setGender(string $gender): string;
}