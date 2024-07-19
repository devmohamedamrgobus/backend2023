<?php

//abstract class db {
//
//    public function select()
//    {
//        echo "select";
//    }
//
//    abstract function test();
//}

//
//class mysqlidb extends db{
//
//    function test()
//    {
//        // TODO: Implement test() method.
//    }
//}




//class a {
//    public function amethod()
//    {
//        echo "amethod";
//    }
//}
//
//
//class  b {
//    public function bmethod()
//    {
//        echo "bmethod";
//    }
//}




//class c {
//
//}
//
//
//$c = new c;



//trait a
//{
//    public function go()
//    {
//        echo "go a";
//    }
//}
//trait b
//{
//    public function go()
//    {
//        echo "go b";
//    }
//}
//class result {
//    use a,b {
//        a::go insteadof b;
//        b::go as bmethod;
//    }
//}
//
//
//$r = new result();
//$r->bmethod();




//class a {
//    final public function go()
//    {
//        echo "go";
//    }
//}
//
//
//class b extends a{
//    public function go()
//    {
//        echo "b go";
//    }
//}


//$b =new b;
//$b->go();





//class a {
//    public function go()
//    {
//        echo "go";
//    }
//
//    public function go($x)
//    {
//        echo "go ".$x;
//    }
//}



//class user {
//    public function __construct()
//    {
//        echo "user start";
//    }
//
//
//    public function __destruct()
//    {
//        echo "user final";
//    }

//    public function __call($name,$args)
//    {
//        if($name == "go"){
//            if(count($args) == 2){
//                echo $args[0]+$args[1];
//            }elseif(count($args)== 3) {
//                echo $args[0]+$args[1]+$args[2];
//            }else {
//                echo "not found";
//            }
//        }
//    }
//}


//$u = new user();
//$u->add(1,2,4,4);




//class db {
//    public static $color;
//    const PI = 22/7;
//    public static function insert()
//    {
//        echo "color is ".self::$color;
//    }
//
//    public function go()
//    {
//        echo "go";
//        echo "pi is :".self::PI;
//    }
//}
//
////db::insert();
//$db = new db;
//$db->go();


//include "category.php";
//spl_autoload_register(function ($name){
//    if(file_exists("controller/".$name.".php")){
//        include "controller/".$name.".php";
//    }elseif(file_exists("model/".$name.".php")){
//        include "model/".$name.".php";
//    }
//});
//
//
//$c = new category();
//$c->insert();
//
//$x= new user();
//$x->insert();



include "controller/category.php";
include "model/category.php";

use model\category as modelcategory;

$c = new modelcategory();
$c->go();
