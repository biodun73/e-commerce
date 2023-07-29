<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Fashion Shoe</title>
  <link rel="stylesheet" href="../HTML/main-css.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;

    }

    .main-header {
      color: white;
      width: 100%;
      height: 60px;
      margin-top: -10px;
      font-weight: bold;
      background-color: black;

    }

    .cate {
      font-size: 18px;
      margin-top: -40px;
      margin-left: 100px;
    }

    .cate a {
      color: white;
      margin-top: 10px;
      text-decoration: none;
    }

    #cart {
      float: right;
      margin-right: 5px;
      margin-top: -80px;
    }

    .adsec {
      margin-top: 60px;
    }

    .mainhead {
      color: black;
      margin-top: 20px;
      margin-bottom: 70px;
      text-align: center;
    }

    .dropbtn {
      background-color: black;
      padding: 16px;
      font-size: 16px;
      border: none;
    }

    .dropdown {
      position: relative;
      display: inline-block;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: black;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      z-index: 1;
    }

    .dropdown-content a {
      color: white;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }

    .search {
      width: 600px;
      text-align: center;
      margin-left: 470px;
      margin-top: -30px;
      font-size: 20px;
      border-radius: 5px;
    }

    .dropdown-content a:hover {
      background-color: black;
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }

    .dropdown:hover .dropbtn {
      background-color: black;
    }
  </style>
</head>

<body class="container-fluid">
  <h1 class=" mainhead">Fashion Shoes</h1>
  <div style='float:right;color:red;margin-right:-25px;'>
    <?php
    if (isset($_SESSION['sum'])) {
      echo $_SESSION['sum'];
    }
    ?>
  </div>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
        aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" <a href="../HTML/home.php">Main</a>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" <a href="../HTML/home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" <a href="../HTML/men_category.php">Men</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" <a href="../HTML/women_category.php">Woman</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" <a href="">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" <a href="../HTML/contact.php">Contact</a>
          </li>
        </ul>
        <form class="d-flex" method="GET" action="searchData.php">
          <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" name="submit" type="submit">Search</button>
        </form>
        <img src="../images/addcart.png" id="cart" width="30" height="30">
      </div>
    </div>
  </nav>
  <div style='float:right;margin-top:-100px;color:black;margin-right:25px;'>
    <?php
    if (isset($_SESSION['sum'])) {
      echo $_SESSION['sum'];
    }

    ?>
  </div>
  </header>