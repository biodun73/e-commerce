
<?php
//create function for php connection with database
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Fashion Shoe</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../ADMIN/colorStyle.css">
        <style>
            .search{
                width: 620px;
                height:150px;
                text-align: center;
                margin-left: 440px;
                margin-top: -250px;
                font-size: 30px;
                border-radius: 5px;
                background-color: #cccccc;
            }

            input{
                width: 600px;
                height: 30px;
                border-radius: 5px;
            }
        </style>
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
            <a  href="edit.php"><img src="../images/edit.png" width="20" height="20"  id="im"></a>
            <p id="im">Edit</p>
            <a  href="delete.php"><img src="../images/delete_1.jpg" width="20" height="20" id="im"></a>
            <p id="im">Delete</p>
            <a  href="productform.php"><img src="../images/insert.jpg" width="20" height="20"  id="im"></a>
            <p id="im">Insert</p>
            <a  href="logout.php"><img src="../images/logout_1.png"width="20" height="20"  id="im"></a>
            <p id="im">Logout</p>
        </div>
        <div class="search">
            <h2>Search product</h2>
            <form method="GET" >
                <input type="text" name="search">
                <button type="submit" name="submit" style="width: 100px;height: 25px; font-size: 20px;" >Search</button>
            </form>
        </div>
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
        $sele = "SELECT productimage, productnumber, productname,productsize,productprice FROM products WHERE productID = '$seach'";
        $search = mysqli_query($link, $sele);
        // mysqli_fetch_field($search);
        while ($row = mysqli_fetch_assoc($search)) {
            echo"<table style=' width: 620px; text-align: center;margin-left: 440px;margin-top: 150px;border-radius: 5px;background-color: #cccccc;'>";
            echo"<tr>";
            echo"<th style='font-size:20px;background-color: black;color:white''>Product</th>";
            echo"<th style='font-size:20px;background-color: black;color:white'''>Product Code</th>";
            echo"<th style='font-size:20px;background-color: black;color:white'''>Product Name</th>";
            echo"<th style='font-size:20px;background-color: black;color:white'''>Product Size</th>";
            echo"<th style='font-size:20px;background-color: black;color:white'''>Price</th>";
            echo"</tr>";
            echo "<tr>";
            echo "<td><img src=" . $row['productimage'] . " width='100px' height='100px'></td>";
            echo "<td><h3>" . $row['productnumber'] . "</h3></td>";
            echo "<td><h3>" . $row['productname'] . "</h3></td>";
            echo "<td><h3>" . $row['productsize'] . "</h3></td>";
            echo "<td><h3>" . $row['productprice'] . "</h3></td>";
            echo '</tr>';
            echo"</table>";
        }
//        echo"</table>";
        