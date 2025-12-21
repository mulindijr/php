<?php 

$rooms = [
  ["type" => "Single", "price" => 500, "availability" => true],
  ["type" => "Double", "price" => 800, "availability" => false],
  ["type" => "Suite", "price" => 1500, "availability" => true],
];

for ($i = 0; $i < count($rooms); $i++) {
  echo "Room Type: " . $rooms[$i]["type"] . PHP_EOL;
  echo "Price: KES " . $rooms[$i]["price"] . PHP_EOL;
  
  if ($rooms[$i]["availability"]) {
    echo "Available: Yes" . PHP_EOL;
  } else {
    echo "Available: No" . PHP_EOL;
  }
  
  echo "-------------------" . PHP_EOL;
}

?>