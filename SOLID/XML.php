<?php

/**
 * Created by PhpStorm.
 * User: samundra
 * Date: 6/16/2016
 * Time: 10:10 PM
 */
class XML implements ResponseTypeInterface
{

    public function send($data)
    {
        return  '<code><data>' . $data . '</data></code>';
    }
}
