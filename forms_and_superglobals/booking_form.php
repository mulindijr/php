<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Booking form</title>
</head>
<body>
  <h1>Booking Form</h1>
  <form method="POST" action="handle_booking.php">
    <label for="guest_name">Name:</label>
    <input type="text" id="guest_name" name="guest_name" required><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="checkin">Check-in Date:</label>
    <input type="date" id="checkin" name="checkin" required><br><br>

    <label for="checkout">Check-out Date:</label>
    <input type="date" id="checkout" name="checkout" required><br><br>

    <label for="room_type">Room Type:</label>
    <select id="room_type" name="room_type" required>
      <option value="single">Single</option>
      <option value="double">Double</option>
      <option value="suite">Suite</option>
    </select><br><br>

    <input type="submit" value="Book Now">

  </form> 
</body>
</html>