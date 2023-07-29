<?php 
include'admin-header.php';
?>
        <?php
          if(!isset($_SESSION["submit"])){
              echo"<h1 style='text-align:center;margin-top:-280px'>";
              echo"<img src='../images/avata.png' style='width:100px;height: 100px;ALIGN:left'>"."<br>";
              echo"Welcome to Adminstration panel";
              echo"</h1>";
          }
 
        ?>
    </body>
</html>
