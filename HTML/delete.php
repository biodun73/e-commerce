<?php

session_start();
//create function for php connection with database

$host = 'localhost';
$user = "root";
$pass = "";
$datadb = "eshop";
$link = mysqli_connect($host, $user, $pass, $datadb);
if (!$link) {
    die("Failed" . mysqli_error($link));
}
$cod = filter_input(INPUT_POST, 'delete');

$delete = "DELETE FROM addcart WHERE  addcart.add_id ='138'";
mysqli_query($link, $delete);
header("Location:webpage.php");
