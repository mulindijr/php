<?php

//ensure request method is post
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
  die("Invalid request. Please submit the form.");
}

//collect and validate inputs
$guest_name = trim($_POST["guest_name"] ?? "");
$email = trim($_POST["email"] ?? "");
$checkin = $_POST["checkin"] ?? "";
$checkout = $_POST["checkout"] ?? "";
$room_type = $_POST["room_type"] ?? "";

//validation
$errors = [];

if ($guest_name === "") {
  $errors[] = "Name is required.";
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $errors[] = "Invalid email format.";
}

if ($checkin === "" || $checkout === "") {
  $errors[] = "Check-in and Check-out dates are required.";
} elseif (strtotime($checkin) >= strtotime($checkout)) {
  $errors[] = "Check-out date must be after Check-in date.";
}

$valid_room_types = ["single", "double", "suite"];
if (!in_array($room_type, $valid_room_types)) {
  $errors[] = "Invalid room type selected.";
}

//if errors, display them
if (!empty($errors)) {
  echo "<h2>Booking Errors:</h2><ul>";
  foreach ($errors as $error) {
    echo "<li style='color:red;'>" . htmlspecialchars($error) . "</li>";
  }
  echo "</ul><a href='booking_form.php'>Go back to the form</a>";
  exit;
}

//process booking (for demo, we just display the details)
echo "<h2>Booking Successful!</h2>";
echo "<p>Thank you, " . htmlspecialchars($guest_name) . ", for your booking.</p>";
echo "<p>Booking Details:</p>";
echo "<ul>";
echo "<li>Email: " . htmlspecialchars($email) . "</li>";
echo "<li>Check-in Date: " . htmlspecialchars($checkin) . "</li>";
echo "<li>Check-out Date: " . htmlspecialchars($checkout) . "</li>";
echo "<li>Room Type: " . htmlspecialchars(ucfirst($room_type)) . "</li>";
echo "</ul>";