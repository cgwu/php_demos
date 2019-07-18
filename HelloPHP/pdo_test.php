<?php
$db = new PDO('mysql:host=localhost;dbname=test','root','Admin12345');
$db->query("INSERT INTO test.books (isbn, author, title, price) VALUES ('isbn3', 'author2', 'title1', 100)");
echo 'done';
?>
