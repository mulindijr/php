<?php

session_start(); // Start the session or resume the existing one

if (!isset($_SESSION['user_id'])) {
  header('Location: login.php');
  exit;
}

// Check user role
if ($_SESSION['role'] !== 'admin') {
  echo "Access denied.";
  exit();
}

echo "Welcome to your admin dashboard!";
// Laravel equivalent:
// Gate / Policies / Middleware

?>