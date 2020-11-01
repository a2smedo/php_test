<?php
$title = "Account";
include('inc/header.php'); ?>

<section class="view-h">
  <div class="container">
    <div class="row py-5">

      <div class="col-md-4 mx-auto">
        <form action="h-login.php" method="post">

          <div class="form-group">
            <label for="email">Email Address :</label>
            <input id="email" name="email" class="form-control" type="email" placeholder="Email Address">
          </div>

          <div class="form-group">
            <label for="password">Password : </label>
            <input id="password" name="password" class="form-control" type="password" placeholder="Password">
          </div>

          <input class="btn btn-primary btn-block mb-3" type="submit" name="submit" value="Login">
        </form>
        <?php require_once('inc/errors.php');  ?>
      </div>


    </div>
  </div>
</section>










<?php include('inc/footer.php'); ?>