<?
echo strstr('helloworld, may world be peaceful', 'world');
echo '<br>';
echo strpos('helloworld, may world be peaceful', 'world');
echo '<br>';
$res =  strpos('helloworld, may world be peaceful', 'worldxx');
var_dump($res);
echo '<br>';

echo str_replace('@', '#', 'hello@world@gmail.com');
echo '<br>';

echo substr_replace('hello@world@gmail.com','###',2,1);	 //子串替换
echo '<br>';

?>