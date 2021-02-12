<?php


class User3
{
        private string $name;
        private int $id;

    /**
     * User3 constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }


    public function addId(){
        $this->id = '2';
    }
}