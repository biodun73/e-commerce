
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
            <h2>Upload Product</h2>
            <form method="post" action="" enctype="multipart/form-data">
                <label>Product name</label><br>
                <input type="text" name="prodNam"><br>
                <label>Product number</label><br>
                <input type="text" name="prodNum"><br>
                <label>Size</label><br>
                <input type="text" name="sized"><br>
                <label>Price</label><br>
                <input type="text" name="price"><br>
                <input type="file" name="filename">
                <input type="submit" name="submit" value="Upload">
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




        try {

            @$productimage = '../images/' . $_FILES["filename"]["name"];

            $productnumber = filter_input(INPUT_POST, "prodNum");
            $productname = filter_input(INPUT_POST, "prodNam");
            $productprice = filter_input(INPUT_POST, "price");
            $productsize = filter_input(INPUT_POST, "sized");
           @ $tmpfile = $_FILES["filename"]["tmp_name"];

            if (is_uploaded_file( @ $tmpfile)) {
                if ($_FILES['filename']['type'] != '.png/.jpg') {
                    echo'';
                } else {
                    move_uploaded_file( @ $tmpfile, $productimage);
                }
            }

            $insert = "INSERT INTO products(productnumber,productname,productimage,productsize,productprice)"
                    . " VALUES('$productnumber','$productname','$productimage','$productsize','$productprice')";
            $query = mysqli_query($link, $insert);
           
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
 //header("Location:../ADMIN/productform.php");
        ?>
    </body>
</html>
