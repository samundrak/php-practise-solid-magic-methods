<?php

/**
 * Created by PhpStorm.
 * User: samundra
 * Date: 6/16/2016
 * Time: 10:09 PM
 */
class JSON implements ResponseTypeInterface
{

    public function send($data)
    {
        return json_encode(['data' => $data]);
    }
}
