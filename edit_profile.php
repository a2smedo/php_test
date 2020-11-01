<?php
$title = "Edit Profile";

include('inc/header.php'); ?>


<section class="view-h">
  <div class="container py-5">
    <h1 class="text-muted lead text-uppercase w-25 mx-auto border-bottom text-center  my-4 pb-3 font-weight-bolder">Update Profile</h1>

    <div class="row py-3">
      <div class="col-md-8 mx-auto">
        <form action="h-edit.php" method="post" class="border p-3">
          <div class="row">
            <div class="col">
              <div class="form-group">
                <label for="uName"> User Name </label>
                <input id="uName" name="uName" class="form-control" type="uName" placeholder="User Name">
              </div>
            </div>

            <div class="col">
              <div class="form-group">
                <label for="phone">Phone Number :</label>
                <input id="phone" name="phone" class="form-control" type="phone" placeholder="Phone Number">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col">
              <div class="form-group">
                <label for="email">Email Address :</label>
                <input id="email" name="uEmail" class="form-control" type="email" placeholder="Email Address">
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label for="password">Password : </label>
                <input id="password" name="password" class="form-control" type="password" placeholder="Password">
              </div>
            </div>
          </div>



          <div class="row">

            <div class="col">
              <div class="form-group">
                <label for="fUrl">Facebook Url :</label>
                <input id="fUrl" name="fUrl" class="form-control" type="fUrl" placeholder="Facebook Url">
              </div>

            </div>

            <div class="col">
              <div class="form-group">
                <label for="tUrl">Twitter Url :</label>
                <input id="tUrl" name="tUrl" class="form-control" type="tUrl" placeholder="Twitter Url">
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label for="inUrl">Instagram Url :</label>
                <input id="inUrl" name="inUrl" class="form-control" type="inUrl" placeholder="Instagram Url">
              </div>

            </div>
          </div>

          <input class="btn btn-primary btn-block mb-1" type="submit" name="submit" value="Save">
        </form>
        <?php include('inc/errors.php');  ?>
      </div>


    </div>
  </div>
</section>


<?php include('inc/footer.php'); ?>