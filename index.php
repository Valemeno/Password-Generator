<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Password Generator - Step 1</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h1>Password Generator By Valemeno - Step 1</h1>
    <form action="step2.php" method="POST">
      <label for="alphabets">Enter Alphabets:</label>
      <input type="text" id="alphabets" name="alphabets" required pattern="[a-zA-Z]+" title="Only alphabets are allowed.">
      
      <label for="digits">Enter Digits:</label>
      <input type="text" id="digits" name="digits" required pattern="\d+" title="Only digits are allowed.">
      
      <label for="special">Enter Special Characters:</label>
      <input type="text" id="special" name="special" required pattern="[!@#$%^&*()_+\-=\\[\]{};':\"\\|,.<>\/?]+" 
        title="Only special characters are allowed.">

      <button type="submit">Next</button>
    </form>
  </div>
</body>
</html>
