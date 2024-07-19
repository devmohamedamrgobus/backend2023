<?php
namespace Devmo\Mvc\controllers;
class users extends controller
{
    public function index()
    {
        $name = "ahmed";
        $colors = ['red','green','blue'];
        $this->view("home",compact('name','colors'));
    }

    public function edit()
    {
        echo "user edit";
    }
}