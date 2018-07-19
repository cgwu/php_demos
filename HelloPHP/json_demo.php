<?php
$arr = array ('a'=>1,'b'=>2,'c'=>3,'d'=>4,'e'=>5,'name'=>'中国');
header('Content-Type:application/json; charset=UTF-8');
echo json_encode($arr);
?>
