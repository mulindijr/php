<?php 

$rooms = [
  [
    "type" => "Single",
    "price" => 3000,
    "available" => true
  ],
  [
    "type" => "Suite",
    "price" => 9000,
    "available" => false
  ]
];

$totalRooms = count($rooms);

foreach($rooms as $index => $room) {
  echo "Room " . ($index + 1) . " of " . $totalRooms . PHP_EOL;
  echo "Room Type: " . $room["type"] . PHP_EOL;
  echo "Price: " . $room["price"] . PHP_EOL;
  echo "Available: " . ($room["available"] ? "Yes" : "No") . PHP_EOL;
  echo "------------------------" . PHP_EOL;
}

?>