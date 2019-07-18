<pre>
<?php
$db = new PDO('mysql:host=localhost;dbname=test','root','Admin12345');
$statement = $db->prepare("select * from books");
$statement->execute();
while($row = $statement->fetch()){
    print_r($row);
}
$statement = null;
echo 'done';
?>
</pre>