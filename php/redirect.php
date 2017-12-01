<?php
 include('process.php');
 $userName = $_POST["user"];
 $passWord = $_POST["pass"];

 //Check for errors
 //if($firstName == '' || $lastName == '' || $email == '' || $state == '' ) {
   // header('Location: index.php?error=You%20left%20a%20field%20empty.');
 //}
$query = "SELECT * FROM dbdemo";
$result  = pg_query($connection, $query);
$isPresent = false;
while($row = pg_fetch_row($result)) {
   		if ($row[0] == $userName && $row[1] == $passWord) {
   			$isPresent = true;
   			echo "You have successfully logged in!";
   			break;
   		}
    }
if($isPresent == false){
   header('Location: login.php?error=Invalid%20Credentials.');
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Redirect Page</title>
</head>
<body>
  
</body>
</html>