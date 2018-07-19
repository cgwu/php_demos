<?
function hello(){
	echo 'this is hello信息' . PHP_EOL;
}
function add($a,$b){return $a + $b;}
echo '<pre>';
hello();
hello();
echo add(1,2).PHP_EOL;
echo '</pre>';
?>