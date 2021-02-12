<?php


class User1
{
    /**
     * @var string
     */
    private string $name;
    /**
     * @var int
     */
    private int $age;
    /**
     * @var string
     */
    private string $email;

    /**
     * User1 constructor.
     * @param string $name
     * @param int $age
     * @param string $email
     */
    public function __construct(string $name, int $age, string $email)
    {
        $this->name = $name;
        $this->age = $age;
        $this->email = $email;
    }

}