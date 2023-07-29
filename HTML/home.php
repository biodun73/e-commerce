<?php
//session_start();
include 'header.php';
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=EB+Garamond&display=swap" rel="stylesheet">

<body class="container-fluid" style="background-color: #fcfcfd;">
    <br>
    <div class="container" style="box-sizing: border-box">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#image" data-slide-to="0" class="active"></li>
                <li data-target="#image" data-slide-to="1"></li>
                <li data-target="#image" data-slide-to="2"></li>
                <li data-target="#image" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">

                <div class="item active">
                    <img src="../images/shoe1.png" alt="Shoe" style="width: 400px;height: 300px">
                    <div class="carousel-caption">
                        <h3>Brown Shoe</h3>
                    </div>
                </div>

                <div class="item">
                    <img src="../images/shoe2.png" alt="Shoe" style="width: 400px;height: 300px">
                    <div class="carousel-caption">
                        <h3>Dark brown</h3>
                    </div>
                </div>

                <div class="item">
                    <img src="../images/shoe3.png" alt="Shoe" style="width: 400px;height: 300px">
                    <div class="carousel-caption">
                        <h3>Black Shoe</h3>
                    </div>
                </div>

                <div class="item">
                    <img src="../images/shoe4.png" alt="Shoe" style="width: 400px;height: 300px">
                    <div class="carousel-caption">
                        <h3>Black shoe</h3>
                    </div>
                </div>

            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#image" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#image" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <br>
    <br>
<div class="container-fluid row p-5">
<h3 style="text-align: center">MEN</h3>
    <hr>
    <div class="col view">
        <img src="../images/shoe1.png" width="200" height="180">
        <a href="../HTML/cat_men_view1.php"><small>Brown color</small></a>
        <a href="../HTML/men_category.php"><small>Price : EURO 35</small></a>
    </div>
    <div class="col view">
        <img src="../images/shoe5.png" width="200" height="180">
        <a href="../HTML/cat_men_view2.php"><small>Black color</small></a>
        <a href="../HTML/men_category.php"><small>Price : EURO 45</small></a>
    </div>
    <div class="col view">
        <img src="../images/shoe6.png" width="200" height="180">
        <a href="../HTML/cat_men_view3.php"><small>Coffee color</small></a>
        <a href="../HTML/men_category.php"><small>Price : EURO 70</small></a>
    </div>

    <br>
    <h3 style="text-align: center">WOMEN</h3>
    <hr>
    <div class="col view">
        <img src="../images/lady2.png" width="200" height="180">
        <a href="../HTML/cat_women_view1.php"><small>Brown color</small></a>
        <a href="../HTML/women_category.php"><small>Price : EURO 45.99</small></a>
    </div>
    <div class="col view">
        <img src="../images/lady6.jpg" width="200" height="180">
        <a href="../HTML/cat_women_view2.php"><small>Blue color</small></a>
        <a href="../HTML/women_category.php"><small>Price : EURO 60.99</small></a>
    </div>
    <div class="col view">
        <img src="../images/lady5.jpg" width="200" height="180">
        <a href="../HTML/cat_women_view3.php"><small>Ash color</small></a>
        <a href="../HTML/women_category.php"><small>Price : EURO 85</small></a>
    </div>
</div>

    <?php
    include '../HTML/footer.php';
    ?>
</body>

</html>