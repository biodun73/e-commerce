<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Fashion Shoe</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../ADMIN/colorStyle.css">
    </head>
    <body>
        <header>
            <div class="adsec">
                <h1>Admin Panel</h1>
            </div>
        </header>
        <div class="controlp">
            <a  href="search.php"><img src="../images/search_1.png" width="20" height="20" id="im"></a>
            <p id="im">Search</p>
            <a  href=""><img src="../images/edit.png" width="20" height="20"  id="im"></a>
            <p id="im">Edit</p>
            <a  href=""><img src="../images/delete_1.jpg" width="20" height="20" id="im"></a>
            <p id="im">Delete</p>
            <a  href="productform.php"><img src="../images/insert.jpg" width="20" height="20"  id="im"></a>
            <p id="im">Insert</p>
            <a  href="logout.php"><img src="../images/logout_1.png"width="20" height="20"  id="im"></a>
            <p id="im">Logout</p>
        </div>