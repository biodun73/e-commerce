<?php
//session_start();
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
    <style>
        .view{
            display: inline-grid;
            grid-template-columns: auto auto auto;
            padding: 15px;
            margin-bottom:20px;
            margin-top:70px;
            margin-left:23px;
            width:420px;
            height:300px;
            box-sizing:border-box;

        }
    </style>
    <body>
        <h3 style="text-align: center">WOMEN FASHION</h3><hr>
        <div  class="view">
            <img src="../images/lady2.png" width="230" height="180">
            <a href="../HTML/cat_women_view1.php"><small>Brown color</small></a>
            <a href="../HTML/cat_women_view1.php"><small>Price : EURO 45</small></a>
        </div>
        <div  class="view">
            <img src="../images/lady6.jpg" width="230" height="180">
            <a href="../HTML/cat_women_view2.php"><small>Blue color</small></a>
            <a href="../HTML/cat_women_view2.php"><small>Price : EURO 60</small></a>
        </div>
        <div  class="view">
            <img src="../images/lady5.jpg" width="230" height="180">
            <a href="../HTML/cat_women_view3.php"><small>Ash color</small></a>
            <a href="../HTML/cat_women_view3.php"><small>Price : EURO 85</small></a>
        </div>


        <?php
        include '../HTML/footer.php';
        ?>
    </body>
</html>

