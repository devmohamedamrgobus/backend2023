<?php

require "../vendor/autoload.php";
use \Devmo\Mvc\core\route;

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();


$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();


(new \Devmo\Mvc\core\app());


// users ( id , name , email , password )
// category (id , name )
// product ( id , name , price , description , img , category_id , user_id)
