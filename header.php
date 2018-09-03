<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../res/css/style.css">
    <link rel="stylesheet" href="../res/css/custom.css">
    <title>AdviserDBM</title>
    <script src="../res/scripts/custom_script.js" charset="utf-8"></script>
  </head>
  <body>

   <nav class="w3-bar">
     <a href="../"><button type="button" class="logo_btn" name="button">AdviserDBM</button></a>
     <?php if(isset($_SESSION['login_status'])) { ?>
     <a href="../logout"><button type="button" class="nav_btn w3-hide-small" name="button">Logout</button></a>
     <a href="../"><button type="button" class="nav_btn w3-hide-small" name="button">Home</button></a>
     <a href="../config"><button type="button" class="nav_btn w3-hide-small" name="button">Config</button></a> <?php } else { ?>
     <a href="../login"><button type="button" class="nav_btn w3-hide-small" name="button">Login</button></a>
     <a href="../config"><button type="button" class="nav_btn w3-hide-small" name="button">Setup</button></a><?php } ?>
     <button type="button" class="w3-hide-large w3-hide-medium nav_btn" name="button" onclick="shownav()">&#9776;</button>
   </nav>

   <div class="w3-bar w3-hide w3-hide-large w3-hide-medium w3-hide w3-bar-block" id="mnav">
     <ul id="mobile_nav">
       <?php if(isset($_SESSION['login_status'])) { ?>
       <li class="nav_btn"> <a href="../config">Config</a> </li>
       <li class="nav_btn"> <a href="../logout">Logout</a> </li> <?php } else { ?>
       <li class="nav_btn"> <a href="../login">Login</a> </li> <?php } ?>
     </ul>
   </div>
