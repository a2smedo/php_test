<?php
$title = "All Products";
require_once('inc/header.php');
require_once('products.php');
?>


<section class="view-h">
  <div class="container py-5">
    <div class="row">

      <?php foreach ($products as $product => $value) { ?>
        <div class="col-md-4 mb-3">
          <div class="card" style="width: 20rem;">
            <div class="text-center">
              <img src="<?= $value['img']; ?>" class="card-img-top" alt="<?php $product ?>" style="width: 285px; height:158px;">
            </div>

            <div class="card-body">
              <h5 class="card-title">Name : <?= $product ?> </h5>
              <p class="card-text my-0">price : <?= $value['price']; ?> EGP </p>
              <p class="card-text"> Descriaption: <?= $value['desc']; ?> </p>
            </div>
          </div>
        </div>

      <?php } ?>
    </div>
  </div>
</section>


<?php require_once('inc/footer.php') ?>