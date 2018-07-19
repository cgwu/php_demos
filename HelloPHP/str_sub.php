<?
$str = 'abcefg@@gmail.com';
$arr = explode('@', $str);
echo '<pre>';
print_r($arr);

echo PHP_EOL;

$array = array('lastname', 'email', 'phone');
$comma_separated = implode(",", $array);
echo $comma_separated;

echo PHP_EOL;

$str = 'I,will.be#back';
$tok = strtok($str,',.#');
while($tok){
	echo $tok. PHP_EOL;
	$tok = strtok(',.#');
}
echo PHP_EOL;

echo substr('abcdefg',2,3);
echo PHP_EOL;
echo substr('abcdefg',-2,3);
echo PHP_EOL;

$str1 = "hello world中国";
$arr = str_split($str1);
print_r($arr);
echo strrev($str1);
echo PHP_EOL;

echo strlen('abc中国');
echo '</pre>';
?>