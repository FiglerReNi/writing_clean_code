<?php


/**
 * Class User2
 */
class User2
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
     * User2 constructor.
     * @param array $userData
     */
    public function __construct(array $userData)
    {
//       B változat
        extract($userData);
        if (isset($name))
            $this->name = $name;
        if (isset($age))
            $this->age = $age;
        if (isset($email))
            $this->email = $email;

//        A változat
//        $this->name = $userData['name'];
//        $this->age = $userData['age'];
//        $this->email = $userData['email'];
    }
}