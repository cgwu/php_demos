<pre>
<?php
$db = new PDO('mysql:host=localhost;dbname=test','root','Admin12345');
$statement = $db->prepare("INSERT INTO test.books (isbn, author, title, price)". 
    " VALUES (?, ?, ?, ?)");
$statement->execute(array(
    'isbn_5',
    'cg2',
    "cg2's book",
    2
));

$statement = null;
echo 'done';
?>
</pre>