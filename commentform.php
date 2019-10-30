<!DOCTYPE html>
<html>
<head>
<title>Blog System</title>
<link rel='stylesheet' type='text/css' href='blog.css' />
</head>
<body>
<?php



// Q10. Complete the statement to read the ID from the query string into $id.
$id = $_GET["blogID"];

// Connect to the database
// Please use your TCA username, password and database name here

$conn = new PDO ("mysql:host=localhost;dbname=tca18061;", "tca18061", "ajosaech");

// Q13. Complete the SQL SELECT statement to retrieve the details for the blog with the selected ID
$result = $conn->query ("SELECT * FROM bg_entries WHERE ID = $id");
$blogrow = $result->fetch();

// Q14. Display the blog entry
while($row = $results->fetch())
{
	echo "<p>";
	echo "Title: " . $row["title"] . "<br />"; 
	echo "Full Details: " . $row["fulldetails"] . "<br />"; 
	echo "Username: " . $row["username"] . "<br />"; 
	echo "Likes: " . $row["likes"] . "<br />"; 
	echo "</p>";

// Q11. Complete the form to allow the user to submit a comment.
// There should be a text field or text area for the comment, and a hidden field
// containing the blog entry ID. This form should submit to addcomment.php.

echo "<form method='post' action='addcomment.php'>";
echo "Comment: ";
echo "<textarea' name='comment'></textarea>";
echo " <input type='hidden' name='blogID' value='$id'/>";
echo "<input type='submit' value='Go!' />";
echo "</form>";

?>
</body>
</html>