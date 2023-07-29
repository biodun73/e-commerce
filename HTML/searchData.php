<?php
include 'header.php';
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=EB+Garamond&display=swap" rel="stylesheet">
    </head>
    <body>
        <?php
        $host = 'localhost';
        $user = "root";
        $pass = "";
        $datadb = "eshop";
        $link = mysqli_connect($host, $user, $pass, $datadb);
        if (!$link) {
            die("Failed" . mysqli_error($link));
        }
        $seach = filter_input(INPUT_GET, 'search');
        $sele = "SELECT productimage, productnumber, productname,productsize,productprice FROM products WHERE productnumber = '$seach'";
        $search = mysqli_query($link, $sele);

        while ($rows = mysqli_fetch_assoc($search)) {
            echo "<img src=" . $rows['productimage'] . " style='width:550px;height:500px;margin-left:50px'>";
            echo"<div style='float:right;margin-bottom:20px;margin-top:20px;margin-right:60px;width:650px;height:400px;"
            . "display:block;box-sizing:border-box;'>";
            echo "<h3>";
            echo$rows['productname'];
            echo"</h3>";
            echo"<small>Price EURO : </small>" . " " . $rows['productprice'] . "<br>";
            echo "<h4>Size </h4>Size :" . " " . $rows['productsize'];
            echo"<h4>Description </h4><p>The shoe product made up of good quality leather.</p>";

            //insert data into addcart 
            echo"<form action='../PHP/add_cart.php' method='post'>";
            echo"<input type='hidden' name='cat'  value=" . $rows['productname'] . ">";
            echo"<input type='hidden' name='imfile' value=" . $rows['productimage'] . ">";
            echo"<input type='hidden' name='price'  value=" . $rows['productprice'] . ">";
            echo"<input type='hidden' name='size'  value=" . $rows['productsize'] . ">";
            echo"<button type='submit' name='submit' style='width:150px;font-weight:bold;background-color:blue; color:white;padding:20px' >ADD TO CART</button >";
            echo"</form>";
            echo"</div>";
        }
        ?>
        <?php
        include '../HTML/footer.php';
        ?>
        ?>

    </body>
</html>
