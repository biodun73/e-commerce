<?php
//session_start();
include 'header.php';
//////////////////////////////////////////
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=EB+Garamond&display=swap" rel="stylesheet">
<body  class="container-fluid" style="background-color: #fcfcfd">
<body  class="container-fluid"  style="background-color: #fcfcfd">

<div class="row">

    <?php
    //create function for php connection with database

    $host = 'localhost';
    $user = "root";
    $pass = "";
    $datadb = "eshop";
    $link = mysqli_connect($host, $user, $pass, $datadb);
    if (!$link) {
        die("Failed" . mysqli_error($link));
    }

    //select product from database
    $output = "SELECT * FROM  products WHERE productID= '3'";
    $query = mysqli_query($link, $output);
    mysqli_fetch_field($query);
    foreach ($query as $rows) {
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
        echo"<input type='hidden' name='cat'  value=".$rows['productname'].">";
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

</div>
</body>
</html>
