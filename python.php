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