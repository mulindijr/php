<?php

//check if file was uploaded
if (!isset($_FILES['room_image'])) {
  die("No file uploaded.");
}

$file = $_FILES['room_image'];

//allowed settings
$allowedTypes = ['image/jpeg', 'image/png'];
$maxSize = 2 * 1024 * 1024; // 2MB in bytes
$uploadDir = 'uploads/';

//chech for upload errors
if ($file['error'] !== UPLOAD_ERR_OK) {
  die("Upload failed with error code " . $file['error']);
}

//validate file size
if ($file['size'] > $maxSize) {
  die("File is too large. Maximum allowed size is 2mb.");
}

//validate file type uisng MIME type
$finfo = finfo_open(FILEINFO_MIME_TYPE);
$mimeType = finfo_file($finfo, $file['tmp_name']);
finfo_close($finfo);

if (!in_array($mimeType, $allowedTypes)) {
  die("Invalid file type. Only JPG and PNG are allowed.");
}

//ensure uploads directory exists
if (!is_dir($uploadDir)) {
  mkdir($uploadDir, 0755, true);
}

//ggenerate safe unique file name
$extension = pathinfo($file['name'], PATHINFO_EXTENSION);
$newFileName = uniqid('room_', true) . '.' . $extension;
$destination = $uploadDir . $newFileName;

//move uploaded file to destination
if (move_uploaded_file($file['tmp_name'], $destination)) {
  echo "✅ Image uploaded successfully.<br>";
  echo "Saved as: " . htmlspecialchars($newFileName);
} else {
  echo "❌ Failed to upload image.";
}

?>