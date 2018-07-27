<?
try {

	throw new Exception("A terrible error has occurred严重错误发生",42);
} catch (Exception $e) {
	echo "Exception ". $e->getCode() . ": ". $e->getMessage()."<br>".
	" in ". $e->getFile() . " on line " . $e->getLine() . "<br>"
	. $e->getTraceAsString() ."<hr>" . $e;
}
?>

<hr>

<?
class myException extends Exception {
	function __toString(){
		return "<table border=\"1\">
		<tr>
		<td><strong>Exception ".$this->getCode()."
		</strong>: ".$this->getMessage()."<br />"."
		in ".$this->getFile()." on line ".$this->getLine()."
		</td></tr>
		</table><br />";

	}
}

try
{
	throw new myException("A terrible error has occurred", 42);
}
catch (myException $m)
{
	echo $m;
}

	

?>