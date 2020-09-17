<?php
  session_start();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Learning Coding</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.ico">
  </head>
  <body>
    <?php
    if (isset($_GET['error'])) {
   if ($_GET['error'] == "emptyfields") {
      echo '<p class="loginerror">Fill in all fields!</p>';
    }
    elseif ($_GET['error'] == "wrongpwd") {
      echo '<p class="loginerror">Wrong Password!</p>';
    }
    elseif ($_GET['error'] == "no_user") {
      echo '<p class="loginerror">Username/Password do not exist!</p>';
    }
  }
  if (isset($_GET['login'])) {
    if ($_GET['login'] == "success") {
        echo '<p class="loginsuccess">Login Successfull!</p>';
    }

  }
     ?>
    <header>
      <nav>
        <?php
        if (isset($_SESSION['userId'])) {
          echo '<form class="" action="includes/logout.inc.php" method="post">
            <button class="logout-button" type="submit" name="logout-submit">Logout</button>
          </form>';
        }
        else {
          echo '

            <form action="includes/login.inc.php" method="post">
                    <input  class= "TOP-RIGHT1" type="text" placeholder="Username/E-mail" name="mailuid" >
                    <input class= "TOP-RIGHT" type="password" placeholder="Password" name="pwd" >
                    <button class= "TOP-RIGHT2" type="submit" name="login-submit">Login</button>
                  </form>
                  <a class="TOP-RIGHT3"href="signup.php">Signup</a>';
        }
         ?>


      </nav>
    </header>
    <a href="index.php">Home</a>
    <a href="python.php">Python</a>

  </body>
</html>
