<?php



// state management 2
    // session => $_SESSION => array
    // cookie => $_COOKIE => array

// file 3 => $_FILES    => array

// server 4 => $_SERVER => array

// global 5 => $GLOBALS => array



// MYSQLI (  functions , object -> oop   ) -> mysql


//$id = $_POST['id'];
//$name = $_POST['name'];
//
//$ids = explode(",",$id);
//$names = explode(",",$name);
//
//$sql = "";
//for($i =0;$i<count($ids);$i++){
//    $sql .= "UPDATE `categories` SET `name` = '$names[$i]' WHERE `id` = $ids[$i] ;";
//}
//
//$connection =  mysqli_connect(hostname: '127.0.0.1',username: 'root',password: '',database: 'backend2023new');
//
////mysqli_query($connection,$sql);
//mysqli_multi_query($connection,$sql);
//
//if(mysqli_affected_rows($connection) > 0){
//    echo "category updated";
//}else {
//    echo "error";
//}





$connection = mysqli_connect(hostname: '127.0.0.1',username: 'root',password: '',database: 'backend2023new');
$query =  mysqli_query($connection,"SELECT * FROM `categories`");

$data =  mysqli_fetch_all($query,MYSQLI_ASSOC);
//$data = mysqli_fetch_assoc($query);


?>

<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    </head>
    <body>
        <table >
            <tr>
                <th>id</th>
                <th>name</th>
            </tr>
            <?php foreach($data as $key => $value): ?>
                <tr>
                    <td><?= $value['id'] ?></td>
                    <td><?= $value['name'] ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </body>
</html>


