<?
header("Content-Type: text/html; charset=gbk");
$out = `dir`;	// dir d:
echo "<pre>$out</pre>";

echo 'The Error Suppression Operator<br>';
$a = @(57/0);
echo "a = $a<br>";

class AClass{};
$myObj = new AClass();
if($myObj instanceof AClass){
	echo "myObj is an instance of AClass<br>";
}
?>