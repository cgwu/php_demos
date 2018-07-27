<?php
echo '<p>Order processed.</p>';
#date_default_timezone_set('UTC');
date_default_timezone_set('Asia/Shanghai');
echo date('H:i, jS F Y');
echo '<br>';
echo date("Y-m-d H:i:s");      
echo '<br>';
echo $_POST['tireqty']; 
echo '<br>';
echo $_REQUEST['sparkqty']; 
echo '<br>';


?>