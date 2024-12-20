<?php
// Validate and retrieve data from Step 2
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $alphabets = str_split(htmlspecialchars($_POST['alphabets']));
  $digits = str_split(htmlspecialchars($_POST['digits']));
  $special = str_split(htmlspecialchars($_POST['special']));
  $alphabetsNo = (int)$_POST['alphabetsNo'];
  $digitsNo = (int)$_POST['digitsNo'];
  $specialNo = (int)$_POST['specialNo'];

  // Generate the password
  $passwordList = array(); // Use array() instead of []
  for ($i = 0; $i < $alphabetsNo; $i++) {
    $passwordList[] = $alphabets[array_rand($alphabets)];
  }
  for ($i = 0; $i < $digitsNo; $i++) {
    $passwordList[] = $digits[array_rand($digits)];
  }
  for ($i = 0; $i < $specialNo; $i++) {
    $passwordList[] = $special[array_rand($special)];
  }
  shuffle($passwordList);
  $password = implode('', $passwordList);
} else {
  die("Invalid access method.");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Password Generator - Result</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h1>Your Generated Password</h1>
    <p>Your password is: <strong><?php echo $password; ?></strong></p>
    <button onclick="window.location.href='index.php'">Start Over</button>
  </div>
</body>
</html>
