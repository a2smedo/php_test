<?php
session_start();

if (isset($_POST['submit'])) {
  $uName = $_POST['uName'];
  $uEmail = $_POST['uEmail'];
  $password = $_POST['password'];
  $phone = $_POST['phone'];
  $fUrl = $_POST['fUrl'];
  $tUrl = $_POST['tUrl'];
  $inUrl = $_POST['inUrl'];

  //Validation
  $errors = [];

  //Name
  $regxName = "/^[a-zA-Z]{4,25}$/";
  if (empty($uName)) {
    $errors[] = "Name is Requird";
  } elseif (!preg_match($regxName, $uName)) {
    $errors[] = "Name is not Valid";
  }

  //Email
  if (empty($uEmail)) {
    $errors[] = "Email is Reqiured";
  } elseif (!filter_var($uEmail, FILTER_VALIDATE_EMAIL)) {
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

  //phone
  $phonePattern = "/^[0-9]{3}[0-9]{4}[0-9]{4}$/";
  if (empty($phone)) {
    $errors[] = "Phone Number is Reqiured";
  } elseif (!preg_match($phonePattern, $phone)) {
    $errors[] = "$phone is not Valid";
  }

  // Facebook url
  if (empty($fUrl)) {
    $errors[] = "Facebook url is Reqiured";
  } elseif (!filter_var($fUrl, FILTER_VALIDATE_URL)) {
    $errors[] = "$fUrl is not Valid";
  }

  // Twitter url
  if (empty($tUrl)) {
    $errors[] = "Twitter url is Reqiured";
  } elseif (!filter_var($tUrl, FILTER_VALIDATE_URL)) {
    $errors[] = "$tUrl is not Valid";
  }

  // Instagram url
  if (empty($inUrl)) {
    $errors[] = "Instagram url is Reqiured";
  } elseif (!filter_var($inUrl, FILTER_VALIDATE_URL)) {
    $errors[] = "$inUrl is not Valid";
  }


  if (empty($errors)) {
    $_SESSION['is_login'] = true;
    $_SESSION['uName'] = $uName;
    $_SESSION['uEmail'] = $uEmail;
    $_SESSION['phone'] = $phone;
    $_SESSION['fUrl'] = $fUrl;
    $_SESSION['tUrl'] = $tUrl;
    $_SESSION['inUrl'] = $inUrl;

    header('location: index.php');
  } else {
    $_SESSION['errors'] = $errors;
    header('location: edit_profile.php');
  }
}
