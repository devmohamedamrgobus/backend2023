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

    }

    public function store()
    {

    }

    public function edit($id)
    {

    }

    public function update()
    {

    }

    public function delete($id)
    {

    }
}