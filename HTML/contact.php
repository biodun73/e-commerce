<?php
//session_start();
include 'header.php';
?>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=EB+Garamond&display=swap" rel="stylesheet">
<body style="background-color: #fcfcfd">
    <div style=" margin-left: 450px;margin-top: 50px">
        <h1>CONTACT ADDRESS</h1>
        <form method="POST" action="">
            <label>Firstname</label><br>
            <input type="text" name="first"><br>
            <label>Lastname</label><br>
            <input type="text" name="last"><br>
            <label>Address</label><br>
            <input type="text" name="address"><br>
            <label>Country</label><br>
            <input type="text" name="country"><br>
            <select name="select">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select><br>
            <textarea cols="50" rows="5"></textarea><br>
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
    <?php
    include '../HTML/footer.php';
    ?>
</body>
</html>
