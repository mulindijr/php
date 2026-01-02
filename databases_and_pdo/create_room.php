<?php

require "db.php";

$sql = "
  INSERT INTO rooms (name, price, is_available)
  VALUES (:name, :price, :is_available)
";

$stmt = $pdo->prepare($sql);

$rooms = [
  ["Executive Suite", 12000, 1],
  ["Standard Room", 4500, 1],
  ["Presidential Suite", 25000, 1],
  ["Economy Room", 3000, 0],
];

foreach ($rooms as $room) {
  $stmt->execute([
    "name" => $room[0],
    "price" => $room[1],
    "is_available" => $room[2],
  ]);
}

echo "Rooms inserted successfully.";