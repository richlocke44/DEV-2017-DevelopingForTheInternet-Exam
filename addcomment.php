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

$conn = new PDO ("mysql:host=localhost;dbname=tca18061;", "tca18061", "ajosaech");

// Q12. Complete addcomment.php so that it:
// - reads the entry ID and the comment from the form on commentform.php;
// - adds an entry to the bg_comments table containing the entry ID, the comment, and the user
// who posted the comment. The approved column should be set to 0
$comment = $_POST["comment"];
$entry = $_POST["blogID"];
$uname = $_SESSION["loggedinuser"];

$conn->query ("INSERT INTO bg_comments ('username, the_comment, entry_ID, approved') 
VALUES ('$uname', '$comment', '$entry', 0)") ;
?>
</body>
</html>