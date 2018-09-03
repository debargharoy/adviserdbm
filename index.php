<?php
session_start();
if (!isset($_SESSION['login_status'])) {
  header("Location: login");
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="res/css/style.css">
    <link rel="stylesheet" href="res/css/custom.css">
    <title>AdviserDBM</title>
    <script src="res/scripts/custom_script.js" charset="utf-8"></script>
  </head>
  <body>

   <nav class="w3-bar">
     <a href="../"><button type="button" class="logo_btn" name="button">AdviserDBM</button></a>
     <a href="logout"><button type="button" class="nav_btn w3-hide-small" name="button">Logout</button></a>
     <a href="about"><button type="button" class="nav_btn w3-hide-small" name="button">About</button></a>
     <a href="config"><button type="button" class="nav_btn w3-hide-small" name="button">Config</button></a>
     <button type="button" class="w3-hide-large w3-hide-medium nav_btn" name="button" onclick="shownav()">&#9776;</button>
   </nav>

   <div class="w3-bar w3-hide w3-hide-large w3-hide-medium w3-hide w3-bar-block" id="mnav">
     <ul id="mobile_nav">
       <li class="nav_link">Account</li>
       <li class="nav_link">Logout</li>
     </ul>
   </div>

    <div class="container element1">
      <div class="input_div" id="temp">
        <div class="input_path">
          <strong>command ></strong>
        </div>
        <form class="" action="" method="post">
          <div class="w3-half">
            <!--<input type="text" class="cmd_input" name="query_input" value="" placeholder="input query here" onkeyup="showHint(this.value)" autofocus>-->
            <textarea name="query_input" class="cmd_input" rows="1" cols="" placeholder="input query here" onkeyup="showHint(this.value)" autofocus></textarea>
          </div>
          <div class="w3-quarter">
            <input type="submit" class="nav_btn" name="submit_query" value="Execute">
          </div>
        </form>
      </div>
    </div>

    <div class="container">
      <div class="suggest_div">
        <div class="input_path">
          <strong>Suggestion:</strong>
        </div>
        <div class="suggest_list">
          <span id="suggest_list"></span>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="output_div">
        <strong>Output:</strong>
      </div>
      <div class="output">
        <span id="show_output">
          <?php if (isset($_POST['submit_query'])) {
            $data=$_POST['query_input'];
            include 'query_db.php';
            $final_output=getOutput($data);
            echo $final_output;
          } ?>
        </span>
      </div>
    </div>

  </body>
</html>
