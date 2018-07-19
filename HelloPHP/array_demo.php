<?
$a1 = range(20,30);
for($i=0; $i<10; $i++){
	echo $a1[$i] . ',';
}
echo '<br>';
echo $a1[10];
echo '<br>';

foreach ($a1 as $k => $v) {
	#echo $v . ',';
	echo "$k => $v <br>";
}
echo '<pre>';
print_r($a1);
echo '</pre>';

$a2 = array('苹果','篮子','香蕉');
print_r($a2);
echo '<hr>';

$a3 = array('苹果'=>5,'篮子'=>7,'香蕉'=>8);
print_r($a3);
echo '<hr>';
$a3['pear'] = 10;
print_r($a3);
echo '<hr>';

foreach ($a3 as $key => $value) {
	echo "$key => $value<br>";
}
echo '<hr>';

# 测试失败
// while(!! $e = each($a3)){
// 	echo 'here';
// 	echo "${e['key']} = > ${e['value']}";
// }
echo '<hr>';

echo '<pre>';
$a4 = array(
	array('苹果',5,1.1),
	array('篮子',7,2.2),
	array('香蕉',8,3.3));
print_r($a4);
echo '</pre>';

echo '<pre>';
$a5 = array(
	array(name => '苹果',quan => 5, price => 1.1),
	array('篮子',7,2.2),
	array('香蕉',8,3.3));
print_r($a5);
echo '</pre>';

echo '<hr>';
$a6 = array(100,9,200,50,1,-100);
sort($a6);
echo '<pre>';
print_r($a6);
echo '</pre>';

sort($a6,SORT_STRING );
echo '<pre>';
print_r($a6);
echo '</pre>';

echo '<hr>';
$a7 = array('a苹果'=>15,'z篮子'=>7,'b香蕉'=>8);
// asort($a7);	// 按value排序
ksort($a7);		// 按key排序
echo '<pre>';
print_r($a7);
echo '</pre>';
# 反向排序: rsort, arsort, krsort.
echo count($a7);
echo sizeof($a7);
echo '<hr>';
echo '<pre>';
var_dump($a7);
var_dump(count($a7));
echo '</pre>';

/* 假定 $var_array 是 wddx_deserialize 返回的数组*/

$size = "large";
$var_array = array("color" => "blue",
                   "size"  => "medium",
                   "shape" => "sphere");
extract($var_array, EXTR_PREFIX_SAME, "wddx");

echo "$color, $size, $shape, $wddx_size\n";

?>