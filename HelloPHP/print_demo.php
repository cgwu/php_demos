<?
$len = printf("Hello中国");
echo $len;
$pi = 3.1415926;
printf("<br>pi = %.3f<br>",$pi);

$balance = 1000000.3456;
$result = number_format($balance,2);
echo "result: $result <br>";

$n = 3.145;
echo round($n,2);
echo '<br>';

echo ceil($n);
echo '<br>';

echo floor($n);
echo '<br>';

?>