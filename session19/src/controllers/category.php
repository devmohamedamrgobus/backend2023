<?php
namespace Devmo\Mvc\controllers;

use Devmo\Mvc\core\db;

class category extends controller
{
    public  function index()
    {
        $db = new db("categories");
        $category =  $db->select()->all();

        return $this->view("category",compact("category"));
    }

    public function create()
    {
        return $this->view("create");
    }

    public function store()
    {
        $categoryname = $_POST['name'];
        $db = new db("categories");
        $db->insert(["name"=>$categoryname])->excute();

        header("location: index");
    }

    public function edit($id)
    {
        $db = new db("categories");
        $data =  $db->select()->where("id","=",$id)->get();
        return $this->view("edit",compact('data'));
    }

    public function update()
    {
        $categoryname = $_POST['name'];
        $id = $_POST['id'];
        $db = new db("categories");
        $db->update(["name"=>$categoryname])->where("id","=",$id)->excute();
        header("location: index");

    }

    public function delete($id)
    {
        $db = new db("categories");
        $db->delete()->where("id","=",$id)->excute();
        header("location: ../index");

    }
}