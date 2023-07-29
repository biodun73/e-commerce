<?php
//session_start();
include '../HTML/header.php';
include 'add_cart.php';
//////////////////////////////////////////
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=EB+Garamond&display=swap" rel="stylesheet">

<body style="background-color: #fcfcfd">
    <h4 style="margin-left: 50px;color: black;"><a href="../HTML/home.php">Continue shopping</a></h4>
    <h3 style="text-align: center;border-bottom:1px solid black;">Your cart</h3><hr>
    <script src="https://www.paypal.com/sdk/js?client-id=Ad4NrtgFRvYcRbXMkh2OQZEgG_r1VcdtcBhFer0f9Qy5rv85mKQ_s0zcdDmL3u2IeqizKpP_AU5gsEPH"> // Replace YOUR_CLIENT_ID with your sandbox client ID
    </script>

    <?php
    echo"<div  style='border-bottom:1px solid black;'>";
    echo"<table  style='1px solid black;box-shadow:15px 5px 10px;padding:10px;width:900px;height:100px; border-radius:5px; background-color:f9f3f3;font-size:18px; margin-top:20px;text-align:center;margin-left:300px;padding:20px;'>";
    echo "<tr>";
    echo"<th style='text-align:center;font-weight:bold;background-color:blue; color:white;padding:10px'>Product</th>";
    echo"<th style='text-align:center;font-weight:bold;background-color:blue; color:white;padding:10px'>Price Product</th>";
    echo"<th style='text-align:center;font-weight:bold;background-color:blue; color:white;padding:10px''>Quantity Product</th>";
    echo"<th style='text-align:center;font-weight:bold;background-color:blue; color:white;padding:10px'>Remove Cart</th>";
    echo"</tr>";

// select from database
    $sum = 0;
    $_SESSION['sum'] = $sum;
    $output = "SELECT DISTINCT orderID,orderimage,orderprice FROM  orders LIMIT 10";
    $query = mysqli_query($link, $output);
    while ($_SESSION['row'] = mysqli_fetch_assoc($query)) {
        //display the data from database using session
        {
            echo"<tr>";
            echo "<td><img src=" . $_SESSION['row']['orderimage'] . "  style='width:90px;height:100px;border-bottom:1px solid black;text-align:center; color:black;padding:10px'></td>";
            echo"<td  style='text-align:center; color:black;padding:10px'>" . "EURO" . ":" . $_SESSION['row']['orderprice'] . "</td>";

            //create form to increace the quantity
            {
                echo "<td><form method='POST' action=''>";
                echo"<input type='number' name='number' value='1' style='width:70px;height:30px;font-size:20px;font-weight:bold;text-align:center;'>";
                echo"<input type='hidden' name='quan' value=" . $_SESSION['row']['orderprice'] . ">";
                echo "<input type='submit' name='submit1' value='+-' style='width:50px;height:30px;font-size:20px;font-weight:bold;text-align:center;'>";
                echo "</form></td>";
            }

            //create form to delete cart from database

            number_format($_SESSION['sum'] += $_SESSION['row']['orderprice']);
            {
                echo "<td><form method='POST' action=''>";
                echo"<input type='hidden' name='id' value=" . $_SESSION['row']['orderID'] . ">";
                echo "<input type='submit' name='submit2' value='Remove'  style='text-align:center'>";
                echo "</form></td>";
                echo "</tr>";
            }
        }
    }

    echo"</table>";
    echo"</div>";
    {
        echo"<div style='font-weight:bold;height:60px;background-color:blue; "
        . "color:white;padding:20px;margin-top:20px;font-size:19px;'>";
        $_SESSION['price'] = filter_input(INPUT_POST, 'quan');
        $_SESSION['number'] = filter_input(INPUT_POST, 'number');
        if (isset($_SESSION['price'])) {

            echo"Subtotal" . " : " . number_format($_SESSION['sum'] += $_SESSION['price'] * $_SESSION['number']);
        }
        echo"<a href='../HTML/payment.php'  style='float:right;color:white'>Proceed for payment</a>";
        echo"</div>";
        {
            
        }
        //remove cart from database
        $idcode = filter_input(INPUT_POST, 'id');
        $delete = "DELETE FROM orders WHERE  orderID='$idcode'";
        mysqli_query($link, $delete);
    }
    ?>

    <?php include '../HTML/footer.php'; ?>
</body>
</html>