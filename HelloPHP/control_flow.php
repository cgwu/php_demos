<?
$str = "world";
switch ($str) {
	case 'hello':
		echo 'this is hello';
		break;
	
	case 'world':
		echo 'this is world';
		break;
	
	default:
		echo 'this is other';
		break;
}
?>
<hr>
<?
$n = 0;
while($n<10){
	echo $n;
	$n++;
}
?>
<hr>
<?
for($n=0;$n<10;$n++){
	echo $n . ',';
}
?>
