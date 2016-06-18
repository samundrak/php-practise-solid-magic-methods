<?php

/**
 * Created by PhpStorm.
 * User: samundra
 * Date: 6/16/2016
 * Time: 10:13 PM
 */
class Mysql implements DatabaseInterface
{

    public function __construct()
    {
        $this->connect();
    }

    public function connect()
    {
        // TODO: Implement connect() method.
    }

    public function disconnect()
    {
        // TODO: Implement disconnect() method.
    }

    public function get()
    {
        return "This is data from mysql";
    }

    public function __destruct()
    {
        $this->disconnect();
    }
}
