<?php

namespace Devmo\Mvc\core;

use Exception;

class app
{
    private $controller;

    private $method;

    private $params = [];


    public function __construct()
    {
        $this->url();
        $this->run();
    }

    private function url()
    {
        $url = $_SERVER['QUERY_STRING'];

        $url = explode("/",$url);

//        if(array_key_exists($url,route::$routes)){
//
//            $this->controller =   route::$routes[$url][0];
//            $this->method = route::$routes[$url][1];
//
//        }else {
//            echo "fail";
//        }

        $this->controller = (!empty($url[0])) ? $url[0] : $_ENV['DEFAULT_CLASS'];
        $this->method = (!empty($url[1])) ? $url[1] : $_ENV['DEFAULT_METHOD'];

        unset($url[0],$url[1]);

        $this->params = $url;
    }

    private function run()
    {
        $controller = "Devmo\\Mvc\\controllers\\".$this->controller;
        if(class_exists($controller)){
            call_user_func_array([new $controller,$this->method],$this->params);
        }else {
           throw new Exception("class not found");
        }
    }
}