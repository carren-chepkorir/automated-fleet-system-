<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Fleet Management System</title>
<!-- <link rel="stylesheet" href="style.css"> -->
  <!-- Bootstrap core CSS -->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
      <a class="navbar-brand" href="index.php"><?php $session= (isset($_SESSION['role'])) ?  $_SESSION['role'] : "Fleet Management System"; echo $session;?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <?php
            if (isset($_SESSION['valid'])) {
              // code...
              include("connection.php");
              $result=mysqli_query($mysqli,"SELECT * FROM users");

           ?>
           <?php switch ($_SESSION['role']):case 'Sales Manager': ?>

          <li class="nav-item active">
            <a class="nav-link" href="viewGoods.php">Manage Cleared Goods
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <!-- <li class="nav-item active">
            <a class="nav-link" href="view.php">Manage Editors</a>
          </li> -->
          <!-- <li class="nav-item active">
            <a class="nav-link" href="viewArticles.php">Manage Articles</a>
          </li> -->
          <?php break; ?>
          <?php case 'Driver': ?>
          <li class="nav-item active">
            <a class="nav-link" href="verifyGoods.php">Verify Transit Goods</a>
          </li>
          <?php break; ?>
          <?php case 'Customer': ?>
          <li class="nav-item active">
            <a class="nav-link" href="verifyReceivedGoods.php">Verify Received Goods</a>
          </li>
          <?php break; ?>
          <?php case 'Clearence Officer': ?>
          <li class="nav-item active">
            <a class="nav-link" href="verifyTransitGoods.php">Cleared Goods</a>
          </li>
          <?php break; ?>
          <?php case 'Admin': ?>
          <li class="nav-item active">
            <a class="nav-link" href="verifyTransitGoodsAdmin.php">Manage Goods</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="viewUsers.php">Manage Users</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="deliveredGoods.php">Delivered Goods</a>
          </li>
          <?php break; ?>
          <?php default: ?>
          <li class="nav-item active">
            <a class="nav-link" href="editorViewArticles.php">Manage Goods</a>
          </li>


          <?php break; ?>
        <?php endswitch ?>
          <li class="nav-item active">
            <a class="nav-link" href="#">Welcome, <?php echo $_SESSION['name'] ?></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
          <?php
          }  else {


          ?>
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="login.php">Login</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="register.php">Register</a>
          </li>
        <?php } ?>
        </ul>
      </div>
    </div>
  </nav>
