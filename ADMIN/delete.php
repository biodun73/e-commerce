
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Fashion Shoe</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../ADMIN/colorStyle.css">
           <style>
        .upload{
            width: 600px;
            height: 400px;
            text-align: center;
            margin-left: 440px;
            margin-top: -250px;
            font-size: 30px;
            border-radius: 5px;
            background-color: #cccccc;
        }
        input{
            width: 200px;
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
<div class="upload">
        <h2>Delete Product</h2>
        <form method="POST" action="" enctype="multipart/form-data">
            <label>Product number</label><br>
            <input type="text" name="prodNum"><br>
            <input type="submit" name="submit" value="Delete">
        </form>
</div>
 <?php
        $host = "localhost";
        $user = "root";
        $pass = "";
        $datadb = "eshop"; //database
        $link = mysqli_connect($host, $user, $pass, $datadb);
        if (!$link) {
            die("Failed" . mysqli_error($link));
        }


        $productnumber = filter_input(INPUT_POST, "prodNum");
        $delete = "DELETE from products WHERE productnumber = '$productnumber ' ";
        if(mysqli_query($link, $delete)==true){
            echo"<script>alert('Product deleted');</script>";
        }
        
        ?>
</body>
</html>
