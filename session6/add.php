<?php
session_start();
    if(!isset($_SESSION['login']) || $_SESSION['login']['admin'] == 0){
        header("location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
    <form action="add.php" method="post">
        <input type="text" name="name">
        <input type="submit">
    </form>
</body>
</html>

<?php

if(isset($_POST['name']) && strlen($_POST['name']) > 0){
    $name = $_POST['name'];
    $connection = mysqli_connect("localhost","root","","backend2023new");
    mysqli_query($connection,"INSERT INTO `categories` (`name`) VALUES ('$name')");
    if(mysqli_affected_rows($connection)){
        echo "category inserted";
        header("location: index.php");
    }
}


?>

