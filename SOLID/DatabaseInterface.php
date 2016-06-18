<?php

/**
 * Created by PhpStorm.
 * User: samundra
 * Date: 6/16/2016
 * Time: 10:12 PM
 */
interface DatabaseInterface
{

    public function connect();
    public function disconnect();
    public function get();
}
