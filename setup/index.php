<?php
session_start();
if (isset($_POST['submit_setup'])) {
      $username = $_POST['login_username']."\n";
      $password = $_POST['login_password']."\n";
      $host = $_POST['hostname']."\n";
      $dbname = $_POST['db_name']."\n";
      $dbuser = $_POST['db_username']."\n";
      $dbpass = $_POST['db_password']."\n";
      $file = fopen("../db_config.php","wb");
      $content="<?php \$user  = '".$username."';\$pass = '".$password."';\$svnm = '".$host."';\$un = '".$dbuser."';\$pd = '".$dbpass."';\$db = '".$dbname."'; ?>";
      $content = str_replace(array("\r", "\n"), '', $content);
      fwrite($file,$content);
      fclose($file);
      header("Location: ../");
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
    <a href="../login"><button type="button" class="nav_btn w3-hide-small" name="button">Login</button></a>
  </nav>

  <div class="container">
    <div class="login">
      <h2 style="text-align: center; font-family: monospace; font-weight: bold">SETUP CONNECTION</h2>
      <center><hr style="border: 2px solid; border-color: #97f2eb; width: 50%; opacity: 0.5;">  </center>
      <div class="" style="font-family: monospace;">
        <center>
          <form class="" action="" method="post">
            <table class="login_table" style="max-width: 100%;">
              <tr>
                <td colspan="2" class="login_table"> <h4>Enter Login Details</h4> </td>
              </tr>
              <tr>
                <td class="login_table"><span class="login_label">Username</span></td>
                <td class="login_table"><input type="text" class="login_input" name="login_username" value="" placeholder="username" autofocus required></td>
              </tr>
              <tr>
                <td class="login_table"> <span class="login_label">Password</span> </td>
                <td class="login_table"> <input type="password" class="login_input" name="login_password" value="" placeholder="password" required> </td>
              </tr><tr><td class="login_table"></td></tr>
              <tr>
                <td class="login_table" colspan="2"> <h4>Enter Database Information</h4> </td>
              </tr>
              <tr>
                <td class="login_table"> <span class="login_label">Hostname</span> </td>
                <td class="login_table"> <input type="text" class="login_input" name="hostname" value="" placeholder="localhost" required> </td>
              </tr>
              <tr>
                <td class="login_table"> <span class="login_label">Database Username</span> </td>
                <td class="login_table"> <input type="text" class="login_input" name="db_username" value="" placeholder="database_username" required> </td>
              </tr>
              <tr>
                <td class="login_table"> <span class="login_label">Database Password</span> </td>
                <td class="login_table"> <input type="password" class="login_input" name="db_password" value="" placeholder="database_password" required> </td>
              </tr>
              <tr>
                <td class="login_table"> <span class="login_label">Database Name</span> </td>
                <td class="login_table"> <input type="text" class="login_input" name="db_name" value="" placeholder="database_name" required> </td>
              </tr>
              <tr>
                <td class="login_table" colspan="2"> <input type="submit" name="submit_setup" value="Setup" class="nav_btn"> </td>
              </tr>
            </table>
          </form>
        </center>
      </div>
    </div>
  </div>

 </body>
</html>
