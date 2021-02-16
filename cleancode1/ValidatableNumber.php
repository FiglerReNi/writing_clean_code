<?php


class ValidatableNumber
{
    private $number;

    /**
     * ValidatableNumber constructor.
     */
    public function __construct(int $number)
    {
        $this->number = $number;
    }

    public function isBiggerThan(int $otherNumber) :bool
    {
        return $otherNumber < $this->number;
    }

    public function isSmallerThan(int $otherNumber) :bool
    {
        return $otherNumber > $this->number;
    }
}