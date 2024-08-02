<?php

namespace Devmo\Mvc\core;

class command
{
    private $command;
    private $classname;
    public function __construct($argv){
        $this->command = $argv[1];
        $this->classname = $argv[2];
    }

    public function run()
    {
        if($this->command == "make:controller"){
           $content =  file_get_contents("src/stubs/controller.stubs");
           $content_new = str_replace("{name}",$this->classname,$content);
           fopen("src/controllers/".$this->classname.".php","w");
           file_put_contents("src/controllers/".$this->classname.".php",$content_new);
        }
    }
}