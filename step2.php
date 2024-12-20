<?php
// Validate and retrieve data from Step 1
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $alphabets = htmlspecialchars($_POST['alphabets']);
  $digits = htmlspecialchars($_POST['digits']);
  $special = htmlspecialchars($_POST['special']);
} else {
  die("Invalid access method.");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Password Generator - Step 2</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h1>Password Generator By Valemeno - Step 2</h1>
    <form action="result.php" method="POST">
      <input type="hidden" name="alphabets" value="<?php echo $alphabets; ?>">
      <input type="hidden" name="digits" value="<?php echo $digits; ?>">
      <input type="hidden" name="special" value="<?php echo $special; ?>">

      <label for="alphabetsNo">Number of Alphabets:</label>
      <input type="number" id="alphabetsNo" name="alphabetsNo" required min="1" max="50">

      <label for="digitsNo">Number of Digits:</label>
      <input type="number" id="digitsNo" name="digitsNo" required min="1" max="50">

      <label for="specialNo">Number of Special Characters:</label>
      <input type="number" id="specialNo" name="specialNo" required min="1" max="50">

      <button type="submit">Generate Password</button>
    </form>
  </div>
</body>
</html>
