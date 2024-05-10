<?php
session_start();
if(isset($_POST['email'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $connection = mysqli_connect("localhost","root","","backend2023new");
    $query = mysqli_query($connection,"SELECT * FROM `users` WHERE  `email` = '$email' AND `password` = '$password'");
    $result = mysqli_fetch_assoc($query);

    if(empty($result)){
        echo "try again";
    }else {
        $_SESSION['login'] = $result;
        header("location: index.php");
    }
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
<form action="login.php" method="post">
    <input type="text" name="email" placeholder="email">
    <input type="text" name="password" placeholder="password">
    <input type="submit" value="login">
</form>
</body>
</html>

