<!DOCTYPE html>
<html>
<head>
<title>Blog System</title>
<link rel='stylesheet' type='text/css' href='blog.css' />
</head>
<body>
<h1>Solent Developers Blog</h1>
<p>
<a href='addentry.html'>Add a new entry</a> | <a href='login.html'>Login</a> </p>
<?php



// Connect to the database
// Please use your TCA username, password and database name here
// Database name is same as username

$conn = new PDO ("mysql:host=localhost;dbname=tca18601;", "tca18061", "ajosaech");

// Q1. Complete the SELECT statement below so that ALL blog entries from the database
// are retrieved.

$result = $conn->query ("SELECT * FROM bg_entries");

// This code prints out any SQL error messages and can be used for debugging - comment out to test
//echo "<p><strong>SQL Errors:</strong>";
//print_r($conn->errorInfo());
//echo "</p>";


while ($row = $result->fetch())
{
	// Q2. Add code inside the "while" loop to display the title, full details,
	// username (of the user who posted the entry) and number of likes for each blog entry
	echo "<p>";
	echo "Title: " . $row["title"] . "<br />"; 
	echo "Full Details: " . $row["fulldetails"] . "<br />"; 
	echo "Username: " . $row["username"] . "<br />"; 
	echo "Likes: " . $row["likes"] . "<br />";
	echo "Comments: " . $row["the_comment"] . "<br />";
	echo "</p>";

	// Q3 Add a hyperlink to "like.php". This should include a query string containing
	// the ID of the current blog entry, to allow the user to "like" that entry.
	echo "<a href='like.php?blogID="$row["ID"] . "'>Like!</a>"
	
	// Q9 Add a hyperlink to "commentform.php". This should include a query string containing
	// the ID of the current blog entry, to allow the user to comment on that entry.
	echo "<a href='commentform.php?blogID="$row["ID"] . "'>Comment!</a>"
	
	// Q15. Show the APPROVED comments for the current blog entry below the details of the entry.
	// The comments table has an approved column representing approved status
	// You will need to manually change the value of the "approved" column to 1 in PHPMyAdmin to test this out 
	// e.g. go to the SQL tab and enter an appropriate UPDATE statement, or edit the record using the GUI
	
	// Q16. Add a hyperlink to "editentryform.php". This should include a query string containing
	// the ID of the current blog entry, to allow the user to edit that entry.
	echo "<a href='editentryform.php?blogID="$row["ID"] . "'>Edit Entry</a>"
}




?>
</body>
</html>
