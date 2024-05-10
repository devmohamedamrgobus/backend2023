<?php

//class user {
//    public $name = "ahmed";
//    public function update()
//    {
//        echo "update";
//    }
//}
//
//
//$x = new user;
//
//$x->update();
//echo "<hr>";
//echo $x->name;

//   -> arrow notation






















// class calc
//    - sum
//    - mult


//class calc {
//    public function  sum($x,$y)
//    {
//        echo $x + $y;
//    }
//
//    public  function  mult($x,$y)
//    {
//        echo  $x * $y;
//    }
//}
//
//
//
//$c = new calc;
//
//$c->mult(10,20);







//class car {
//    public $color;
//
//    public $name;
//
//    public function move()
//    {
//        echo "car move ".$this->color . " and name is : ".$this->name;
//    }
//}
//
//
////$car1 = new car;
////$car1->name = "fiat";
////$car1->color = "black";
////print_r($car1);
////
////echo "<hr>";
////
////$car2 = new car;
////$car2->name = "bmw";
////$car2->color = "red";
////print_r($car2);
//
//
//
//
//
//$car1 = new car;
//$car1->color = "red";
//$car1->name = "bmw";
//$car1->move();
//
//echo "<hr>";
//$car2 = new car;
//$car2->color = "black";
//$car2->name = "fiat";
//$car2->move();






//class calc {
//    public $x;
//    public $y;
//
//    public $result;
//
//    public function __construct($n1,$n2)
//    {
//        $this->x = $n1;
//        $this->y = $n2;
//    }
//
//    public function add()
//    {
//        $this->result =  $this->x + $this->y;
//        return $this->result;
//    }
//
//    public function sub()
//    {
//        $this->result =  $this->x - $this->y;
//        return $this->result;
//    }
//
//    public function mult()
//    {
//        $this->result =  $this->x * $this->y;
//        return $this->result;
//    }
//
//    public function div()
//    {
//        $this->result =  $this->x / $this->y;
//        return $this->result;
//    }
//
//    public function print()
//    {
//        echo $this->result;
//    }
//}
//
//
//
//$c = new calc(20,20);
//
//$c->add();
//$c->print();


//class car {
//    public function engin()
//    {
//        echo "engin";
//    }
//}
//
//
//
//class bmw extends car{
//
//}
//
//class fiat extends car {
//    public function stop()
//    {
//        echo "stop car";
//    }
//}


//
//$f = new fiat;
//$f->engin();



// access modifiers
    // public
    // protected
    // private



//class a {
//    private $color = "red";
//    public function getcolor()
//    {
//        echo "color is :".$this->color;
//    }
//}


//$a = new a;
//$a->getcolor();
//echo $a->color;


//class b extends a{
//    public function test()
//    {
//        echo "color is :".$this->color." from b class";
//    }
//}
////
//$b = new b;
//$b->test();


//interface db
//{
//    public function insert();
//    public function update();
//    public function delete();
//    public function select();
//}
//
//
//class mysqldb implements db {
//    public function insert()
//    {
//        echo "insert";
//    }
//    public function update()
//    {
//        echo "update";
//    }
//    public function delete()
//    {
//        echo "deletye";
//    }
//    public function select()
//    {
//        echo "select";
//    }
//}
//
//
//
//class sqlserver implements db {
//    public function insert()
//    {
//        echo "insert sql";
//    }
//    public function update()
//    {
//        echo "update sql";
//    }
//    public function delete()
//    {
//        echo "deletye sql";
//    }
//    public function select()
//    {
//        echo "select sql";
//    }
//}
//
//
//
//
//
//
//
//$connection = new mysqldb();
//$connection->insert();














class user {
    private $connection;
    public function __construct()
    {
        $this->connection = mysqli_connect("localhost","root","","backend2023new");
    }
    public function insert($data)
    {
        $key =  array_keys($data);
        $key = implode(",",$key);
        $values = "";
        foreach ($data as $value) {
            if(is_string($value)){
                $values .= " '$value',";
            }else {
                $values .= " $value,";
            }
        }
        $values = rtrim($values,",");
       mysqli_query($this->connection,"INSERT INTO `users` ($key) VALUES ($values)");
    }


    public function update($data,$conditon)
    {
        $row = "";
        foreach ($data as $key => $value){
            $row .= "`$key` = '$value',";
        }
        $row = rtrim($row,",");
        mysqli_query($this->connection,"UPDATE `users` SET $row $conditon");
    }

    public function delete($condition)
    {
        $sql = "DELETE FROM `users` $condition";
        mysqli_query($this->connection,$sql);
    }

    public function select($columns = "*",$condition = "")
    {
        $sql = "SELECT $columns FROM `users` $condition";
        $query = mysqli_query($this->connection,$sql);
        return  mysqli_fetch_all($query,MYSQLI_ASSOC);
    }
}



$user = new user;
//$user->update([
//    "name"=>"1",
//    "email"=>"1@ss.ss",
//    "password"=>123
//],"WHERE id = 2");

//$user->delete("where id = 1");


echo "<pre>";
print_r($user->select("*","where id =4"));