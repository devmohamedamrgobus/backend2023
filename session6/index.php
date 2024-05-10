<?php

session_start();
if (!isset($_SESSION['login'])) {
    header("location: login.php");
}

$connection = mysqli_connect("localhost","root","","backend2023new");
    $query =  mysqli_query($connection,"SELECT * FROM `categories`");
    $result =  mysqli_fetch_all($query,MYSQLI_ASSOC);

?>

<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    </head>
    <body>
    <?php if($_SESSION['login']['admin']): ?>
        <a href="add.php">add</a>
    <?php endif; ?>

    <a href="logout.php">logout</a>

    <table>
            <tr>
                <th>id</th>
                <th>name</th>
                <?php if($_SESSION['login']['admin']): ?>
                    <th>delete</th>
                    <th>edit</th>
                <?php endif; ?>

            </tr>

            <?php foreach ($result as $value): ?>
                <tr>
                    <td><?= $value['id'] ?></td>
                    <td><?= $value['name'] ?></td>
                    <?php if($_SESSION['login']['admin']): ?>
                    <td><a href="delete.php?id=<?= $value['id'] ?>">delete</a></td>
                    <td><a href="edit.php?id=<?= $value['id'] ?>">edit</a></td>
                    <?php endif; ?>
                </tr>
            <?php endforeach; ?>
        </table>
    </body>
</html>