<?
$a = '5a';
$b = 7;
$c = $a + $b;
$d = $a . $b;
echo $c;
echo '<br>';
echo $d;
if(is_numeric($a)){
	echo '<br>字符串是数字';
}
if(is_numeric($b)){
	echo '<br>整数是数字';
}
$i = 3.2;
if(is_int((int)$i)){
	echo '<br>is int';
} else {
	echo '<br>is not int';
}
?>