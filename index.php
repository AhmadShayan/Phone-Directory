<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Phone Directory</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h2>Add Details</h2>
    <form method="POST" action="submit.php" onsubmit="showConfirmation(); return false;">
      <label for="name">Name:</label>
      <input type="text" name="name" placeholder="Enter Your Name" id="name" required>

      <label for="phone">Phone Number:</label>
      <input type="text" name="phone" placeholder="Enter Your Phone Number" id="phone" required>

      <button type="submit">Submit</button>
    </form>

    <div id="confirmation" style="display: none;">
      Data stored successfully!
    </div>
  </div>

  <script src="script.js"></script>
</body>
</html>
