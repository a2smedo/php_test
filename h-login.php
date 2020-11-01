<?php
session_start();

if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  //Validation
  $errors = [];
  //Email
  if (empty($email)) {
    $errors[] = "Email is Reqiured";
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Email is not Valid";
  }

  //Password
  $passLength = strlen($password);
  $pass_pattren = "/^(?=.*[a-z])(?=.*[a-z])(?=.*[0-9]).{1,}$/";

  if (empty($password)) {
    $errors[] = "Password is Reqiured";
  } elseif (!preg_match($pass_pattren, $password)) {
    $errors[] = "password should be string containing at least 1 uppercase, 1 lowercase, 1 digit";
  } elseif ($passLength < 7 || $passLength > 30) {
    $errors[] = "Password should be between 8 and 30 length";
  }

  if (empty($errors)) {
    $_SESSION['is_login'] = true;
    $_SESSION['email'] = $email;

    header('location: show-products.php');
  } else {
    $_SESSION['errors'] = $errors;
    header('location: login.php');
  }
}
