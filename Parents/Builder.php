<?php

/**
 * Created by PhpStorm.
 * User: samundra
 * Date: 6/15/2016
 * Time: 12:44 AM
 */
trait Builder
{
    public function __call($name, $arguments)
    {
        $member = new Member();
        return call_user_func_array([$member, $name], $arguments);
    }

    public static function __callStatic($name, $arguments)
    {
        $instance = new static;
        return call_user_func_array([$instance, $name], $arguments);
    }
}

