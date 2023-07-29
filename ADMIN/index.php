<?php
session_start();
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
        <title>Fashion Shoes</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="colorStyle.css">
        <style>
            .adlog{
                width:700px;
                height: 300px;
                margin-top: 30px;
                margin-left: 400px;
                border-radius: 5px;
                box-sizing: border-box;
                background-color: #e0e0e0;
            }
            .adpost{
                width: 400px;
                height: 150px;
                margin-left: 130px;
                border-radius: 5px;
                box-sizing: border-box;
                padding: 10px;
                background-color: #e4ebe9;
            }
        </style>
    </head>
    <body>
        <header>
            <div class="adsec">
                <h1>Administration</h1>
            </div>
        </header>
        <div class="adlog">
            <h1>Administration Login</h1>
            <img src="../images/lock.png" style="width:50px;height: 50px;margin-left: 50px;border-radius:10px;margin: 5px;">
            <div class="adpost">
                <form method="POST">
                    <label>Username</label><br>
                    <input type="text" name="user"><br>
                    <label>Password</label><br>
                    <input type="password" name="pass"><br>
                    <input type="submit" name="submit" value="Login">
                </form>
            </div>
        </div>
    </div>
    <?php
    //////////////////////////////////////
    //connection
    //create function for php connection with database

    $host = 'localhost';
    $user = "root";
    $pass = "";
    $datadb = "eshop";
    $link = mysqli_connect($host, $user, $pass, $datadb);
    if (!$link) {
        die("Failed" . mysqli_error($link));
    }
    //////////////////////////////////////
    $usern= filter_input(INPUT_POST, 'user');
    $passn= filter_input(INPUT_POST, 'pass');
    $select = "SELECT username,pass FROM login WHERE username='$usern' AND pass= '$passn'   ";
    $query = mysqli_query($link, $select);
    while ($row = mysqli_fetch_assoc($query)) {
        $_SESSION["user"]=$row["username"];
        $_SESSION["pass"]=$row["pass"];
        if ($_SESSION["user"]=='admin' || $_SESSION["pass"]=='12345') {
            header("Location:admin_panel.php");
            
        } 
        else {
       
            echo"<script>alert('Wrong Username or Password');</script>";
        }
       
    }
    ?>
</body>
</html>
