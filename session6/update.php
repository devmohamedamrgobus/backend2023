<?php

session_start();
if (!isset($_SESSION['login']) || $_SESSION['login']['admin'] == 0) {
    header("location: login.php");
}

$name = $_POST['name'];
$id = $_POST['id'];
$connection = mysqli_connect("localhost","root","","backend2023new");
$query =  mysqli_query($connection,"UPDATE `categories` SET `name` = '$name' WHERE `id` = $id");

if(mysqli_affected_rows($connection)){
    header("location: index.php");
}
