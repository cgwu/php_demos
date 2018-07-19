<?
if( trim('   php   '.PHP_EOL) == 'php'){
	echo 'trim works';
} else {
	echo 'trim not work';
}
echo nl2br("\r\nhello\nworld".PHP_EOL);
echo htmlentities("<strong>Hello!中国</strong>");
echo "\n<br>\n";
echo htmlspecialchars("<strong>Hello!中国</strong>");
echo "\n<br>\n";
echo strip_tags("<strong>Hello!中国</strong>");

$str1 = '//a\n\rdelete from xxx中国';
echo '<pre>';
echo $str1;
echo addslashes($str1);
echo "\n". strtoupper("Hello World!").PHP_EOL;
echo str_pad('hello', 10,'#',STR_PAD_LEFT).'world'.PHP_EOL;
echo '</pre>';
?>