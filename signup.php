
 <?php
require "header.php";
 ?>

  <main>
      <h1 class="signup" class="center"><u>Signup<u></h1>
      <?php
        if (isset($_GET['error'])) {
          if ($_GET['error'] == "emptyfields") {
          echo '<p class="signuperror">Fill in all fields!</p>';
          }
          elseif ($_GET['error'] == "invaliduidmail") {
              echo '<p class="signuperror">Invalid username and e-mail!</p>';
          }
          elseif ($_GET['error'] == "invaliduidmail") {
              echo '<p class="signuperror">Invalid username and e-mail!</p>';
          }
          elseif ($_GET['error'] == "invaliduid") {
              echo '<p class="signuperror">Invalid username</p>';
          }
          elseif ($_GET['error'] == "invalidmail") {
              echo '<p class="signuperror">Invalid e-mail!</p>';
          }
          elseif ($_GET['error'] == "passwordcheck") {
              echo '<p class="signuperror">Your passwords do not match!</p>';
          }
          elseif ($_GET['error'] == "usertaken") {
              echo '<p class="signuperror">Username is already taken!</p>';
          }

        }

        if (isset($_GET['signup'])){
            if ($_GET['signup'] == "success") {
                  echo '<p class="signup_success">Signup Successfull!</p>';
                }
              }

       ?>
      <form class="color"action="includes/signup.inc.php" method="post">
        <div class="center-input">
        <input class="center-input" type="text" name="uid" placeholder="Username"> <br>
        <input class="center-input" type="text" name="mail" placeholder="E-mail"><br>
        <input class="center-input" type="password" name="pwd" placeholder="Password"> <br>
        <input class="center-input" type="password" name="pwd-repeat" placeholder="Repeat password"> <br>
      </div>
      <button class="signup-button" type="submit" name="signup-submit">Signup</button>
      </form>
  </main>

  <?php
  require "footer.php";
   ?>
