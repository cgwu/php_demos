<pre>
<?php
try{
    $db = new PDO('mysql:host=localhost;dbname=test','root','Admin12345');
} catch(Exception $error) {
    die("Connection failed:" . $error->getMessage());
}

try{
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->beginTransaction();
    #$db->exec("insert into accounts (account_id, amount) values (23, '5000')" );
    #$db->exec("insert into accounts (account_id, amount) values (27, '-5000')" );
    $statement = $db->prepare("INSERT INTO test.books (isbn, author, title, price)". 
    " VALUES (?, ?, ?, ?)");
    $statement->execute(array(
        'isbn_6',
        'cg2',
        "cg2's book",
        2
    ));
    $statement->execute(array(
        'isbn_7',
        'cg2',
        "cg2's book",
        2
    ));
    $db->commit();
}catch (Exception $error) {
    $db->rollback();
    echo "Transaction not completed: " . $error->getMessage();
}
$statement = null;
echo 'done';
?>
</pre>