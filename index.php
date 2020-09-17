
 <?php
require "header.php";
 ?>
 <div class="white">
  <main id="div-wrapper1"class="color">

      <?php
      if (isset($_SESSION['userId'])) {
        echo '    <p>You are logged in!</p>';
      }
      else {
        echo '    <p>You are logged out!</p>';
      }
       ?>
    </main>
    </div>



  <?php
  require "footer.php";
   ?>
