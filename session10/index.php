<?php

require "db.php";


$db = new db("localhost","root","","backend2023new","products");
//$db->insert([
//    "name"=>"ahmed",
//    "email"=>"ww@ww.coc",
//    "password"=>12345
//])->excute();

//echo "<pre>";
//print_r($db->select()->where("email","=","ww@ww.coc")->Andwhere("name","=","ahmed")->get());

//$db->delete()->where("id","=",4)->excute();


//$db->update([
//    "name"=>"tamer",
//    "email"=>"e"
//])->where("id","=",5)->excute();


//$data = $db->select("products.name as proname, categories.name as catname")->innerJoin("categories","categories.id","products.category_id")->all();

//echo "<pre>";
//print_r($data);