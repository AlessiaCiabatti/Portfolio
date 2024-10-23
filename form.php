<?php


if (isset($_POST['btn-send'])) {
  $UserName = $_POST['name'];
  $Email = $_POST['email'];
  $Message = $_POST['message'];

  if (empty($UserName) || empty($Email) || empty($Message)) {
    header('location:index.php?error');
  } else {
    $to = "alessiaciaba@gmail.com";

    if (mail($to, $UserName, $Email, $Message)) {
      header('location:index.php?success');
    }
  }
} else {
  header('location:index.php');
}
