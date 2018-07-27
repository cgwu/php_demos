<?
@ $db =  new mysqli('localhost','root','Admin12345','test');
if (mysqli_connect_errno()) {
echo 'Error: Could not connect to database. Please try again later.';
exit;
}

$result = $db->query('select * from books');
$num_results = $result->num_rows;
echo "<p>Number of books found: " . $num_results . "</p>";

for ($i=0; $i <$num_results; $i++) {
	$row = $result->fetch_assoc();
	echo "<p><strong>".($i+1).". Title: ";
	echo htmlspecialchars(stripslashes($row['title']));
	echo "</strong><br />Author: ";
	echo stripslashes($row['author']);
	echo "<br />ISBN: ";
	echo stripslashes($row['isbn']);
	echo "<br />Price: ";
	echo stripslashes($row['price']);
	echo "</p>";
}

$result->free();
$db->close();
?>