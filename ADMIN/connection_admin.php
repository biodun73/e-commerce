<?php
    //create function for php connection with database

    $host = 'localhost';
    $user = "root";
    $pass = "";
    $datadb = "eshop";
    $link = mysqli_connect($host, $user, $pass, $datadb);
    if (!$link) {
        die("Failed" . mysqli_connect_error($link));
    }
