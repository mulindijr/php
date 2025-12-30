<?php
//superglobals are built-in variables in PHP that are always accessible, regardless of scope. 
//They are used to access information about the server, user input, and session data.

// Example of using some common superglobals:
// $_GET - Used to collect data sent via URL parameters
// $_POST - Used to collect data sent via HTTP POST method
// $_SERVER - Contains information about headers, paths, and script locations
// $_SESSION - Used to store session variables
// $_COOKIE - Used to access cookies sent by the browser
// $_FILES - Used to handle file uploads
// $_REQUEST - Contains data from $_GET, $_POST, and $_COOKIE
// $_ENV - Contains environment variables
// $_GLOBALS - Used to access global variables from anywhere in the script

/*
| Superglobal | Purpose               |
| ----------- | --------------------- |
| `$_GET`     | URL query data        |
| `$_POST`    | Form submission data  |
| `$_SERVER`  | Request & server info |
| `$_FILES`   | File uploads          |
| `$_SESSION` | User sessions         |
| `$_COOKIE`  | Browser cookies       |
| `$_REQUEST` | Combined input data   |
| `$_ENV`     | Environment variables |
| `$_GLOBALS` | Global variables      |
*/


// Example usage:
// Accessing a GET parameter
if (isset($_GET['name'])) {
  echo "Hello, " . htmlspecialchars($_GET['name']) . "!";
}

// Accessing a POST parameter
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email'])) {
  echo "Your email is: " . htmlspecialchars($_POST['email']);
}

// Accessing server information
echo "You are visiting from: " . $_SERVER['HTTP_USER_AGENT'];

// Starting a session and setting a session variable
session_start();
$_SESSION['user'] = 'JohnDoe';
echo "Session user is: " . $_SESSION['user'];

// Accessing a cookie
if (isset($_COOKIE['theme'])) {
  echo "Your selected theme is: " . htmlspecialchars($_COOKIE['theme']);
}

// Handling file upload
if (isset($_FILES['upload'])) {
  echo "Uploaded file name: " . htmlspecialchars($_FILES['upload']['name']);
}

// Accessing a request variable
if (isset($_REQUEST['action'])) {
  echo "Action requested: " . htmlspecialchars($_REQUEST['action']);
}

// Accessing an environment variable
if (isset($_ENV['PATH'])) {
  echo "System PATH is: " . htmlspecialchars($_ENV['PATH']);
}

// Accessing a global variable
$GLOBALS['globalVar'] = 'I am a global variable';
echo "Global variable value: " . $GLOBALS['globalVar'];

?>