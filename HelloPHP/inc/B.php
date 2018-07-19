<?
include_once('A.php');
echo '这里是B.php'.PHP_EOL;

function fb(){
	echo __FILE__ . " : ". __LINE__. ' this is '. __FUNCTION__ . PHP_EOL;
	fa();
}
?>