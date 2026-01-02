<?php
$host = "127.0.0.1";
$dbname = "hotelia";
$username = "hotelia_user";
$password = "secret123";

try {
  $pdo = new PDO(
    "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
    $username,
    $password
  );

  // Throw exceptions on errors(VERY IMPORTANT)
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
  die("Could not connect to the database $dbname :" . $e->getMessage());
}

/*
  Why this matters:

  - PDO = database abstraction layer
  - ERRMODE_EXCEPTION = safer debugging
  - Laravel does this automatically via .env

*/