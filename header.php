<!DOCTYPE HTML>
<html lang="en">

<head>
  <title>CA1 </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  

  <!-- Add icon library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!--font-->
  <link rel="stylesheet" href="font/stylesheet.css">
  <!--css-->
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
<?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>


    <!--wrapper-->
    <div id="wrapper">
      <!--header-->
      <header><img src="img/header.jpg" alt="header-bg"></header>

      <!--nav-->
      <nav>
        <div class="topnav" id="myTopnav">
        <div class="logo"><img src="img/logo2.jpg" alt=""></div>
          <a href="index.php" class="<?= ($activePage == 'index') ? 'active' : ''; ?>" >Home</a>
          <div class="dropdown">
            <button class="dropbtn ">Listings
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="index.php" class="<?= ($activePage == 'index') ? 'active' : ''; ?>">All Properties</a>
              <a href="residential_property.php" class="<?= ($activePage == 'residential_property') ? 'active' : ''; ?>">Residential</a>
              <a href="commercialProperties.php" class="<?= ($activePage == 'commercialProperties') ? 'active' : ''; ?>">Commercial</a>
              <a href="sites.php" class="<?= ($activePage == 'sites') ? 'active' : ''; ?>">Sites</a>
            </div>
          </div>
          <a href="testimonials.php" class="<?= ($activePage == 'testimonials') ? 'active' : ''; ?>">Testimonials</a>
          <a href="aboutus.php" class="<?= ($activePage == 'aboutus') ? 'active' : ''; ?>">About Us</a>
          <a href="contact.php" class="<?= ($activePage == 'contact') ? 'active' : ''; ?>">Contact</a>
          <a href="./admin/index.php">Admin</a>
          <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
        </div>

      </nav>