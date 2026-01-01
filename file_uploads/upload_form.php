<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Upload Images</title>
</head>
<body>
  <h2>UPLOAD ROOM IMAGE</h2>

  <form action="upload_room_image.php" method="POST" enctype="multipart/form-data">
    <label>Select image (JPG / PNG only, max 2MB):</label><br><br>

    <input type="file" name="room_image" id="image"><br><br>

    <button type="submit">Upload Image</button>
  </form>

</body>
</html>