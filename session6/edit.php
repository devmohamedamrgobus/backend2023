<?php

session_start();
if (!isset($_SESSION['login']) || $_SESSION['login']['admin'] == 0) {
    header("location: login.php");
}

$id = $_GET['id'];
$connection = mysqli_connect("localhost","root","","backend2023new");
$query =  mysqli_query($connection,"SELECT * FROM `categories` WHERE `id` = $id");
$result =  mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
<form action="update.php" method="post">
    <input type="text" value="<?= $result['name'] ?>" name="name">
    <input type="hidden" name="id" value="<?= $result['id'] ?>">
    <input type="submit">
</form>
</body>
</html>
