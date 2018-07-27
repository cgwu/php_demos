<?
$a = 5;
$b = $a;
echo "$a $b".'<br>';
$b = 7;
echo "$a $b".'<br>';

$b = &$a;	// 引用
$b = 10;
echo "$a $b".'<br>';
unset($a);	// break the link between $a and the value in memory
echo "a=$a b=$b".'<br>';
?>