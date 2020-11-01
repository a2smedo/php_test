<?php
$title = "Home";
require_once('inc/header.php') ?>



<section class="home view-h">
  <div class="container text-center">
    <div class="row py-3">
      <div class="col-md-12">
        <h1 class="text-white "> Welcome To Our Store </h1>
      </div>
      <div class="col-md-12">
        <p>
          <?php if (isset($_SESSION['is_login']) and $_SESSION['is_login'] == true) {
            echo "<a class='btn btn-warning mr-2' href='edit_profile.php'>Update your Profile</a>";

            if (isset($_SESSION['uName'])) {
              echo "<a class='btn btn-secondary' href='profile.php'>Go to Profile</a>";
            }
          } else {
            echo "<a class='btn btn-success' href='login.php'>Please Login</a>";
          }

          ?>
        </p>
      </div>
    </div>
  </div>
</section>

<?php require_once('inc/footer.php')
?>