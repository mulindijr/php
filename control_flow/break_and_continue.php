<?php 

$rooms = [
  [
    "type" => "Suite", 
    "available" => true
  ],
  [
    "type" => "Deluxe", 
    "available" => false
  ],
  [
    "type" => "Standard", 
    "available" => true
  ],
];

foreach($rooms as $room) {
  if (!$room["available"]) {
    continue;
  }
  echo $room["type"] . " is available." . PHP_EOL;
  echo "------------------------" . PHP_EOL;
}

?>