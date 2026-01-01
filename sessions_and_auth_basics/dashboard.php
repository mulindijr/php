<?php

session_start();

// PROTECTING PAGES (AUTH GUARD)
if (!isset($_SESSION['user_id'])) {
  header('Location: login.php');
  exit;
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
</head>
<body>

<h2>Admin Dashboard</h2>

<p>Welcome, <?php echo htmlspecialchars($_SESSION["email"]); ?></p>

<ul>
  <li>Manage Rooms</li>
  <li>View Bookings</li>
  <li>Manage Users</li>
</ul>

<a href="logout.php">Logout</a>

</body>
</html>