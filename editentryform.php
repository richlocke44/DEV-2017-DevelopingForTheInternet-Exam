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

$conn = new PDO ("mysql:host=localhost;dbname=tca18061;", "tca18061", "ahosaech");

// Q16 continued. Complete editentryform.php so that it shows a form allowing
// the administrator to alter the blog entry (the full details, not the title).
// The current entry must be included in
// the form. The script must be accessible to users with administrator privilege
// only. The form should send its details to editentry.php.
$id = $_GET["blogID"];

$result = $conn->query ("SELECT * FROM bg_entries WHERE ID = $id");

if( isset ($_SESSION["adminstatus"])
{
	echo "<p>";
	echo "Title: " . $row["title"] . "<br />"; 
	echo "Full Details: " . $row["fulldetails"] . "<br />"; 
	echo "Username: " . $row["username"] . "<br />"; 
	echo "Likes: " . $row["likes"] . "<br />";
	echo "Comments: " . $row["the_comment"] . "<br />";
	echo "</p>";
	
	echo "<form method='post' action='editentry.php'>";
	echo "<p>";
	echo "Change Details";
	echo "<textarea name='fulldetails'></textarea>";
	echo "<input type="submit" value="Go!" />"
	
	
	echo "</form>";
}
else {
	echo "<p>";
	echo "You are not and Admin, Go Away!";
	echo "</p>";
}

?>
</body>
</html>
