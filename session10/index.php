<?php

require "db.php";


$db = new db("localhost","root","","backend2023new","users");
//$db->insert([
//    "name"=>"ahmed",
//    "email"=>"ww@ww.coc",
//    "password"=>12345
//])->excute();

echo "<pre>";
print_r($db->select("name")->where("id","=",5)->all());