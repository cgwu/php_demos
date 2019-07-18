<pre>
<?php
$db = new PDO('mysql:host=localhost;dbname=test','root','Admin12345');
$statement = $db->prepare("INSERT INTO test.books (isbn, author, title, price)". 
    " VALUES (:isbn, :author, :title, :price)");
$statement->execute(array(
    'isbn' => 'isbn_4',
    'author' => 'cg',
    'title' => "cg's book",
    'price' => 1
));

$statement = null;
echo 'done';
?>
</pre>