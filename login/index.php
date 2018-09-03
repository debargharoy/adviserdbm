<?php
session_start();
if (isset($_SESSION['login_status'])) {
  header("Location: ../");
}
if (!fopen("../db_config.php","rb")) {
  header("Location: ../setup");
}
$loginError=false;
if (isset($_POST['submit_login'])) {
  include '../db_config.php';
  $login_name=$_POST['login_username'];
  $login_password=$_POST['login_password'];
  if (!(strcmp($login_name,$user)||strcmp($login_password,$pass))) {
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['login_status'] = true;
    header("Location: ../");
  }
  else {
    $loginError=true;
  }
}
?><!DOCTYPE html>
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
    <a href="../about"><button type="button" class="nav_btn w3-hide-small" name="button">About</button></a>
    <a href="../setup"><button type="button" class="nav_btn w3-hide-small" name="button">Setup</button></a>
  </nav>

  <div class="container">
    <div class="login">
      <h2 style="text-align: center; font-family: monospace; font-weight: bold">LOGIN</h2>
      <center><hr style="border: 2px solid; border-color: #97f2eb; width: 50%; opacity: 0.5;">  </center>
      <div class="" style="font-family: monospace;">
        <?php if($loginError==true) { echo '<p class="center loginError">Invalid Login Credential!</p>'; } ?>
        <center>
          <form class="" action="" method="post">
            <table class="login_table" style="max-width: 100%;">
              <tr>
                <td class="login_table"><span class="login_label">Username</span></td>
                <td class="login_table"><input type="text" class="login_input" name="login_username" value="" placeholder="username" autofocus required></td>
              </tr>
              <tr>
                <td class="login_table"> <span class="login_label">Password</span> </td>
                <td class="login_table"> <input type="password" class="login_input" name="login_password" value="" placeholder="password" required> </td>
              </tr>
              <tr>
                <td class="login_table" colspan="2"> <input type="submit" name="submit_login" value="Login" class="nav_btn"> </td>
              </tr>
            </table>
          </form>
        </center>
      </div>
    </div>
  </div>

 </body>
</html>
