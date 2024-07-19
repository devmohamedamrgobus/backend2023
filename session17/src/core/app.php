<?php

namespace Devmo\Mvc\core;

use Exception;

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

        $this->controller = (!empty($url[0])) ? $url[0] : $_ENV['DEFAULT_CLASS'];
        $this->method = (!empty($url[1])) ? $url[1] : $_ENV['DEFAULT_METHOD'];
    
    }

    private function run()
    {
        $controller = "Devmo\\Mvc\\controllers\\".$this->controller;
        if(class_exists($controller)){
            call_user_func_array([new $controller,$this->method],[]);
        }else {
           throw new Exception("class not found");
        }
    }
}