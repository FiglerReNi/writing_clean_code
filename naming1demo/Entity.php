<?php
/*Hibás elnevezések*/

class Entity
{
    public $title;
    public $description;
    public $ymdhm;

    /**
     * Entity constructor.
     * @param $title
     * @param $description
     * @param $ymdhm
     */
    public function __construct($title, $description, $ymdhm)
    {
        $this->title = $title;
        $this->description = $description;
        $this->ymdhm = $ymdhm;
    }

}