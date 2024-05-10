<?php

//if(isset($_FILES['file'])){
////
////    $ext = explode("/",$_FILES['file']['type'])[1];
////    $name = $_POST['name'];
////    $tmp = $_FILES['file']['tmp_name'];
////
////    $connection = mysqli_connect("localhost","root","","backend2023new");
////    $query = mysqli_query($connection,"INSERT INTO `person` (`name`,`img`) VALUES ('$name','$name.$ext')");
////
////    move_uploaded_file($tmp,"img/$name.$ext");
//
//  for($i=0;$i<count($_FILES['file']['name']);$i++){
//        move_uploaded_file($_FILES['file']['tmp_name'][$i],"img/".$_FILES['file']['name'][$i]);
//  }
//}


// server
// global




?>

<html>
    <head></head>
    <body>
        <form action="index.php" method="post" enctype="multipart/form-data">
            <input type="file" name="file[]" multiple>
            <input type="submit" value="upload">
        </form>
    </body>
</html>
