<?php

/**
 * Created by PhpStorm.
 * User: samundra
 * Date: 6/16/2016
 * Time: 10:10 PM
 */
class HTML implements ResponseTypeInterface
{

    public function send($data)
    {
        return '<h1>' . $data . '</h1>';
    }
}
