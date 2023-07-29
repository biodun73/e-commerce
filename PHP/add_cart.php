<?php
//create function for php connection with database
$host = "localhost";
$user = "root";
$pass = "";
$datadb = "eshop";
$link = mysqli_connect($host, $user, $pass, $datadb);
////////////////////////////////////////////////

$name = filter_input(INPUT_POST, 'cat');
$image = filter_input(INPUT_POST, 'imfile');
$price = filter_input(INPUT_POST, 'price');
$siz = filter_input(INPUT_POST, 'size');
echo $name."/n";
echo$image."/n";
echo$price."/n";
echo$siz;
$inser = "INSERT INTO orders(ordername,orderimage,ordersize,orderprice) VALUES('$name','$image','$siz','$price')";
if (empty($name) && empty($image) && empty($price) && empty($siz)) {
    echo "<h3></h3>";
} else {

    mysqli_query($link, $inser);
    header("Location:../PHP/display_cart.php");
}
