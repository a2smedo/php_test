<?php
$title = "Account Profile";
include('inc/header.php');

?>

<section class="view-h">

  <div class="container py-5">
    <h2 class="text-muted lead text-center font-weight-bolder border-bottom my-5 mx-auto w-25 py-2"> Your Profile </h2>
    <div class="row">

      <div class="col-md-6 mx-auto text-center">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Name : <?= $_SESSION['uName']; ?> </h5>
            <p class="card-text">Email : <?= $_SESSION['uEmail'] ?> </p>
            <p class="card-text">Phone Number : <?= $_SESSION['phone']; ?> </p>
            <p class="card-text">Facebook : <?= $_SESSION['fUrl']; ?> </p>
            <p class="card-text">Twitter : <?= $_SESSION['tUrl']; ?> </p>
            <p class="card-text">Instagram : <?= $_SESSION['inUrl']; ?> </p>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require_once('inc/footer.php'); ?>