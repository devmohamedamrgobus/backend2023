<?php

//$i = 0;
//
//while($i<10){
//    echo $i."<br>";
//    $i++;
//}
//
//
//
//for($i=0;$i<10;$i++){
//    echo $i."<br>";
//}

//$numbers = [20,3,5,67,1];


//while($x = array_pop($numbers)){
//    echo $x."<br>";
//}
//print_r($numbers);

//for(;$x = array_pop($numbers);){
//    echo $x."<br>";
//}


//$i=0;
//do {
//    echo $i."<br>";
//    $i++;
//}while($i>10);

//          0  1 2 3  4
//$numbers = [20,3,5,67,1];

//foreach ($numbers as $v){
//    echo $v."<br>";
//}


// array


//$colors = ['red','green','blue'];
//print_r($colors);


//$user = ['mohamed',29,'giza'];
//
//print_r($user);


//$user = ['name'=>'mohamed','age'=>29,'address'=>'giza'];

//foreach ($user as $k => $v){
//    echo $k." : ".$v."<br> ";
//}

//echo $user['age'];
//print_r($user);

// name : mohamed
// age : 29
// address : giza


//$user = ['name'=>'mohamed','age'=>29,'address'=>'giza'];

//['name'=>'mohamed','age'=>29,'address'=>'giza']

//$users = [
//    ['name'=>'mohamed','age'=>29,'address'=>'giza'],
//    ['name'=>'ahmed','age'=>22,'address'=>'cairo'],
//    ['name'=>'ramy','age'=>21,'address'=>'baltim']
//];

//echo "<pre>";
//print_r($users);
//die;

//foreach ($users as $value) {
//    foreach ($value as $key => $user){
//          echo $key." : ".$user."<br>";
//    }
//    echo  "--------------------------- <br>";
//}

// name : mohamed
// age : 29
// address : giza
// ---------------------------
// name : mohamed
// age : 29
// address : giza
//-----------------------------
// name : mohamed
// age : 29
// address : giza

//echo "<pre>";
//print_r($users);


//$users = [
//    ['name'=>'mohamed','age'=>29,'address'=>'giza','skills'=>['html','css','js']],
//    ['name'=>'ahmed','age'=>22,'address'=>'cairo','skills'=>['php','python','c#']],
//    ['name'=>'ramy','age'=>21,'address'=>'baltim','skills'=>['backend','ui','ux']]
//];
//
//
//foreach ($users as $value) {
//    foreach ($value as $key => $user){
//        if(is_string($user)){
//            echo $key." : ".$user."<br>";
//        }
//    }
//    echo  "--------------------------- <br>";
//}


// functions


//function sayhi()
//{
//    echo "hi";
//}
//
//
//sayhi();

/**
 * @param int|float $age
 * @param string $name
 * @return void
 */
function sayHi(int|float $age, string $name = "ahmed"): void
{
    echo "name is : $name and your age is : $age <br>";
}


/**
 * @param int|float $x
 * @param int|float $y
 * @param string $operator
 * @return void
 */
//function calc(int|float $x, int|float $y, string $operator): void
//{
//    switch ($operator) {
//        case "+":
//            echo $x + $y;
//        break;
//        case "-":
//            echo $x - $y;
//        break;
//        case "*":
//            echo $x * $y;
//        break;
//        case "/":
//            echo $x / $y;
//        break;
//    }
//}
//
//
//calc(x: 10,y: 20,operator: "/");


///**
// * @param int|float $x
// * @param int|float $y
// * @return int|float
// */
//function add(int|float $x,int|float $y):int|float
//{
//    return $x + $y;
//}
//
//
//
//echo add(10,60) + 10;

//
///**
// * @param array $array
// * @return string
// */
//function map(array $array): void
//{
//    foreach ($array as $key => $value) {
//       echo "$key : $value <br>";
//    }
//}
//
//
//
//
//
//
//
//
//
//$user = ['name'=>'ahmed','age'=>40,'address'=>'cairo'];
//
//$data = ['id'=>1,'title'=>'test 1','description'=>'test desc'];
//
//map($user);





$block = [
    'dog',
    'blabla',
    'test'
];

// this is dog and blabla
// this is ... and ...

