<?php



// state management 2
    // session => $_SESSION => array
    // cookie => $_COOKIE => array

// file 3 => $_FILES    => array

// server 4 => $_SERVER => array

// global 5 => $GLOBALS => array



// MYSQLI (  functions , object -> oop   ) -> mysql

$connection =  mysqli_connect(hostname: '127.0.0.1',username: 'root',password: '',database: 'backend2023new');

mysqli_query($connection,"INSERT INTO `categories` (`name`) VALUES ('mohamed') ");


