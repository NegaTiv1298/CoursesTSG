<?php
declare(strict_types=1);

/**
 * Employee data model
 */
class Employee implements IEmployee
{
    /** @var int */
    public $age;

    /** @var string */
    public $name;

    /** @var string */
    public $gender;

    /** @var float */
    public $salary;

    /**
     * @inheritDoc
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @inheritDoc
     */
    public function setAge(int $age): int
    {
        return $this->age = $age;
    }

    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @inheritDoc
     */
    public function setName(string $name): string
    {
        return $this->name = $name;
    }

    /**
     * @inheritDoc
     */
    public function getGender(): string
    {
        return $this->gender;
    }

    /**
     * @inheritDoc
     */
    public function setGender(string $gender): string
    {
        return $this->gender = $gender;
    }

    /**
     * @inheritDoc
     */
    public function getSalary(): float
    {
        return $this->salary;
    }


    /**
     * @inheritDoc
     */
    public function setSalary(float $salary): float
    {
        return $this->salary = $salary;
    }
}