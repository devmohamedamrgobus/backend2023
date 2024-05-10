<?php

session_start();
if (!isset($_SESSION['login']) || $_SESSION['login']['admin'] == 0) {
    header("location: login.php");
}

$id =  $_GET['id'];

$connection = mysqli_connect("localhost","root","","backend2023new");
mysqli_query($connection,"DELETE FROM `categories` WHERE `id` = $id");

if(mysqli_affected_rows($connection)){
    header("location: index.php");
}

