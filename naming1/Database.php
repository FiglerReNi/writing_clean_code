<?php


class Database
{
    private $client = '';

    /**
     * Database constructor.
     * @param string $client
     */
    public function __construct(string $client)
    {
        $this->client = $client;
    }

    /**
     * @return string
     */
    public function getClient(): string
    {
        if(!$this->client) throw new Error("Database not connected");
        return $this->client;
    }



}