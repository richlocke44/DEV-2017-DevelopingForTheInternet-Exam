<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Blog System</title>
<link rel='stylesheet' type='text/css' href='blog.css' />
</head>
<body>
<?php

// Connect to the database
// Please use your TCA username, password and database name here

$conn = new PDO ("mysql:host=localhost;dbname=18061;", "18061", "ajosaech");

// Q17. Complete editentry.php to actually change the entry's details in the database
$fulldetails = $_POST["fulldetails"];


$conn->query ("UPDATE bg_entries WHERE fulldetails = $fulldetails") ;
?>
</body>
</html>