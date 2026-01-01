<?php

session_start(); // Start the session or resume the existing one

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  header('Location: login.php');
  exit();
}

$email = trim($_POST['email'] ?? '');
$password = trim($_POST['password'] ?? '');

// Dummy user data for demonstration
$valid_email = 'admin@hotel.com';
$valid_password = 'secret';

if ($email === $valid_email && $password === $valid_password) {
  //login success
  $_SESSION['user_id'] = 1;
  $_SESSION['email'] = $email;
  $_SESSION['role'] = 'admin';

  header('Location: dashboard.php');
  exit;

} 

//login failed
$_SESSION['error'] = 'Invalid email or password.';
header('Location: login.php');
exit;

?>