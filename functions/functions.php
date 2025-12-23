<?php

function calculateBookingTotal(int $nights, int $price): int {
  return $nights * $price;
}

$total = calculateBookingTotal(3, 1200);
echo "Total price is: KES " . $total . PHP_EOL;
echo "--------------------" . PHP_EOL;


function bookRoom(int $price, int $nights, bool $available): string {
  if (!$available) {
    return "Room not available" . PHP_EOL;
  }

  $total = $price * $nights;
  return "Booking confirmed. Total: KES " . $total . PHP_EOL;
}

echo bookRoom(1700, 3, true)

?>