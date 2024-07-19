<?php

namespace Devmo\Mvc\core;

class app
{
    private $controller;

    private $method;


    public function __construct()
    {
        $this->url();
        $this->run();
    }

    private function url()
    {
        $url = $_SERVER['QUERY_STRING'];

        $url = explode("/",$url);

        $this->controller = (!empty($url[0])) ? $url[0] : "users";
        $this->method = (!empty($url[1])) ? $url[1] : "index";
    }

    private function run()
    {
        $controller = "Devmo\\Mvc\\controllers\\".$this->controller;

        call_user_func_array([new $controller,$this->method],[]);
    }
}