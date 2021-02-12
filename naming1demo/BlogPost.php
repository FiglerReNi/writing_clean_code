<?php


class BlogPost
{
    public $title;
    public $description;
    public $publishDate;

    /**
     * BlogPost constructor.
     * @param $title
     * @param $description
     * @param $publishDate
     */
    public function __construct($title, $description, $publishDate)
    {
        $this->title = $title;
        $this->description = $description;
        $this->publishDate = $publishDate;
    }

    function print(){
        echo 'Title: ' . $this->title;
        echo 'Description: ' . $this->description;
        echo 'Published: ' . $this->publishDate;
    }

}