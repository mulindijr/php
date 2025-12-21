<?php 

$rooms = [
  ["type" => "Single", "price" => 500, "availability" => true],
  ["type" => "Double", "price" => 800, "availability" => false],
  ["type" => "Suite", "price" => 1500, "availability" => true],
];

foreach($rooms as $room){
  echo "Room Type: " . $room["type"] . PHP_EOL;
  echo "Price: $" . $room["price"] . PHP_EOL;
  echo "Available: " . ($room["availability"] ? "Yes" : "No") . PHP_EOL;
  echo "------------------------" . PHP_EOL;
}

?>