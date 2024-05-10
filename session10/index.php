<?php

require "db.php";


$db = new db("localhost","root","","backend2023new","users");
//$db->insert([
//    "name"=>"ahmed",
//    "email"=>"ww@ww.coc",
//    "password"=>12345
//])->excute();

//echo "<pre>";
//print_r($db->select()->where("email","=","ww@ww.coc")->Andwhere("name","=","ahmed")->get());

//$db->delete()->where("id","=",4)->excute();


$db->update([
    "name"=>"tamer",
    "email"=>"e"
])->where("id","=",5)->excute();