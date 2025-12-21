<?php

$rooms = [
  ["type" => "Single", "price" => 500, "availability" => true],
  ["type" => "Double", "price" => 800, "availability" => false],
  ["type" => "Suite", "price" => 1500, "availability" => true],
];

$count = 0;

while($count < count($rooms)) {
  echo "Room Type: " . $rooms[$count]["type"] . PHP_EOL;
  echo "Price: $" . $rooms[$count]["price"] . PHP_EOL;
  echo "Available: " . ($rooms[$count]["availability"] ? "Yes" : "No") . PHP_EOL;
  echo "------------------------" . PHP_EOL;
  $count++; 
}

?>