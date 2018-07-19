<?
$a = 9;
$b = 2;
echo $a + $b;
echo $a % $b;
?>
<hr>
<?
$c = '2';
echo $b == $c;
echo $b === $c; # 恒等，值和类型一致
if($b === $c){
	echo "相等";
} else {
	echo "不相等";
}
?>
