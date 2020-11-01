<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Link => Font  -->
  <!-- Bootstrap Css -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- FontAwesome Css -->
  <link rel="stylesheet" href="css/all.min.css">
  <!-- Style Css -->
  <link rel="stylesheet" href="css/style.css">

  <title> <?php echo $title; ?></title>
</head>

<body>
  <?php session_start();
  ?>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <div class="container">
      <a class="navbar-brand" href="index.php">Market</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home </a>
          </li>
          <li class="nav-item">
            <?php
            if (isset($_SESSION['is_login']) and $_SESSION['is_login'] == true) {
              echo "<a class='nav-link' href='show-products.php'>Product </a> ";
            } else {
              echo "";
            }
            ?>
          </li>

          <li class="nav-item dropdown">

            <?php
            if (isset($_SESSION['is_login']) and $_SESSION['is_login'] == true) {
              echo "<a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
             {$_SESSION['email']}
           </a>
           <div class='dropdown-menu' aria-labelledby='navbarDropdown'>
             <a class='dropdown-item' href='edit_profile.php'>Edit Profile</a>
             
           </div>";
            } else {
              echo "<a class='nav-link' href='login.php'>Account</a>";
            }
            ?>

          </li>


          <li class="nav-item">
            <?php
            if (isset($_SESSION['is_login']) and $_SESSION['is_login'] == true) {
              echo "<a class='nav-link' href='logout.php'>Logout </a> ";
            } else {
              echo "";
            }
            ?>


          </li>
        </ul>

      </div>
    </div>
  </nav>