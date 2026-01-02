<?php
/*
  A database:
 - Stores persistent data
 - Is structured into tables
 - Uses SQL to read/write data
*/

/*
  PDO:
  - Secure (prepared statements)
  - Supports multiple databases
  - Used by Laravel internally
*/

/*
1. WHAT DOES PDO MEAN?

PDO = PHP Data Objects

Break it down:

PHP → the language you are writing

Data → information stored in a database (rooms, users, bookings)

Objects → PHP classes you interact with

👉 PDO is PHP’s official way to talk to a database safely.

Think of PDO as:

“A translator between PHP and MySQL”

PHP cannot speak SQL by itself. PDO is the bridge.

2. WHY PDO EXISTS (IMPORTANT HISTORY)

Old PHP used:

mysql_connect()

mysql_query()

Problems:

Unsafe (SQL injection)

Removed from PHP

Hard to maintain

PDO fixes this by:

Preventing hacking

Supporting many databases

Enforcing best practices

Laravel uses PDO internally.

3. REAL-WORLD ANALOGY (VERY IMPORTANT)

Imagine:

Database = Bank vault

SQL = Language the bank understands

PDO = Secure bank teller

Prepared statements = ID verification

You never talk to the vault directly. PDO does it for you safely.

*/

/*

COMPLETE FLOW (READ THIS TWICE)
$pdo      → connects to DB
prepare() → write SQL safely
execute() → run SQL
fetch()   → get data


This NEVER changes.

*/

$pdo = new PDO("mysql:host=127.0.0.1;dbname=hotelia", "root", "");

// 1️⃣ Prepare SQL
$stmt = $pdo->prepare(
  "SELECT name, price FROM rooms WHERE price > :price"
);

// 2️⃣ Execute SQL
$stmt->execute([
  "price" => 5000
]);

// 3️⃣ Fetch results
$rooms = $stmt->fetchAll(PDO::FETCH_ASSOC);

// 4️⃣ Use results
foreach ($rooms as $room) {
  echo $room["name"] . "- KES " . $room["price"] . "<br>";
}


/*
  SUMMARY:
  - PDO = PHP Data Objects
  - Secure way to talk to DB
  - Uses prepared statements
  - Supports multiple DBs
  - Used by Laravel internally

  | Variable | Full Meaning    | What it is    |
  | -------- | --------------- | ------------- |
  | `$pdo`   | PHP Data Object | DB connection |
  | `$stmt`  | Statement       | SQL command   |
  | `$sql`   | SQL string      | Query text    |
  | `$rooms` | Data array      | Results       |
  | `:price` | Placeholder     | Safe variable |

*/