<?

define('TIREPRICE', 100);
define('OILPRICE', 10);
define('SPARKPRICE', 4);

echo 'hello';

echo '<pre>';
echo 'heredoc syntax (<<<):'. PHP_EOL;
echo <<<end
line 1
line 2
line 33

end;

echo TIREPRICE. PHP_EOL ;
$b = 6 + ($a = 5);
echo $b . PHP_EOL;
$b += 1;
$b++;
++$b;
echo $b . PHP_EOL;

echo '</pre>';

// echo phpinfo();

$a = 56;
echo gettype($a).'<br />';
settype($a, 'float');	// float === double
echo gettype($a).'<br />';

echo intval('11',2).'<br>';
echo intval('11',8).'<br>';

if($a<10){
	echo "a < 10";
} elseif ($a < 100) {
	echo "a < 100";
} else {
	echo 'else';
}
echo "<br>";

$key = 'b';
switch ($key) {
	case 'a':
		echo 'is a';
		break;
	
	case 'b':
		echo 'is b';
		// The call to exit stops PHP from executing the remainder of the script.
		// exit;
		break;
	
	default:
		echo 'else';
		break;
}
echo "<br>";


echo '<h1>The End</h1>';
?>