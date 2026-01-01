<?php
// Session allows the server to store user data across multiple requests e.g. login status, user preferences, etc.

// STARTING A SESSION
session_start(); // Start the session or resume the existing one

/*Important rules:
  - Must be called before any output
  - Must be on every page that uses sessions
*/

// STORING SESSION DATA
$_SESSION['user_id'] = 12345;
$_SESSION['role'] = 'admin';

// ACCESSING SESSION DATA
if (isset($_SESSION['user_id'])) {
  echo "User ID: " . $_SESSION['user_id'] . PHP_EOL;
  echo "Role: " . $_SESSION['role'] . PHP_EOL;
  echo "User logged in successfully." . PHP_EOL;
  echo "===========================" . PHP_EOL;
} else {
  echo "No session data found." . PHP_EOL;
}

// It's laravel equivalent is:
auth()->check(); // Check if user is authenticated

// LOGOUT (DESTROYING SESSIONS)
session_destroy(); // Ends the session and clears all session data

// Laravel equivalent:
Auth::logout(); // Logs out the user

?>