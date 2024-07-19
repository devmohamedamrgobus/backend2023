<?php

namespace Devmo\Mvc\controllers;

class controller
{
    public function __call($name,$params)
    {
        echo "method :".$name." not found";
    }
}