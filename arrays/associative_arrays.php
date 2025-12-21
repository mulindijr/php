<?php 

$rooms = [
  "type" => "Suite",
  "price" => 1500,
  "beds" => 2,
  "availability" => true,
];

foreach($rooms as $key => $value) {
  echo $key . ": " . $value . " " . ($key === "availability" ? ($value ? "yes" : "no") : "") . PHP_EOL;
}

?>