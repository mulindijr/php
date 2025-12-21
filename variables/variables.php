<?php

$name = "Hotelia";
$room_type = "Deluxe Suite";
$price = 1500;
$availability = false;

echo "Hotel: " . $name . PHP_EOL;
echo "Room Type: " . $room_type . PHP_EOL;
echo "Price: KES " . $price . PHP_EOL;

if ($availability) {
  echo "Available: Yes" . PHP_EOL;
} else {
  echo "Available: No" . PHP_EOL;
}

?>