<?php
  if (isset($_GET['error'])) {
  	echo "Invalid Credentials.";
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
</head>
<body>
  <h2>Enter Credentials:</h2>
<form method = "POST" action="redirect.php">
    <label>Username: </label>
    <input type = "text" name = "user"/><br/>

    <label>Password: </label>
    <input type = "password" name = "pass"/><br/>

    <input type = "submit" name = "btn" value = "Submit"/>
</body>
</html>