<?php

require "db.php";

$sql = "
  SELECT name, price
  FROM rooms
  WHERE price > :price
   AND is_available = :is_available
";

$stmt = $pdo->prepare($sql);

$stmt->execute([
  "price" => 5000,
  "is_available" => 1,
]);

$rooms = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (empty($rooms)) {
  echo "No rooms found.";
  exit;
}

foreach ($rooms as $room) {
  echo "Room: " . htmlspecialchars($room["name"]) . "<br>";
  echo "Price: KES " . number_format($room["price"]) . "<br><br>";
}