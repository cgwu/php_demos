<?
/* final */ class classname{
	const PI = 3.1415926;
	public $attribute1;
	public $attribute2;

	function __construct($param='foo'){
		echo "Constructor called with parameter ". $param."<br>";
	}

	function __destruct(){
		echo "Destructor called <br>";
	}

	/* private */ static function squared($input){
		return $input * $input;
	}

	/* final */ public function operation1()
	{
		echo "operation1 called <br>";
	}

	public function operation3($param)
	{
		$this->attribute1 = $param;
		echo "operation3 called with param: $param <br>";
	}

	public function operation2($param1, $value='')
	{
		# code...
	}
}

class B extends classname{
	public function operation1()
	{
		echo "B::operation1 called <br>";
	}
	public function operation4()
	{
		echo "operation4 called <br>";
	}
}

$a =  new classname("First");
$b =  new classname("Second");
$c =  new classname();
$d = new B();

$a->operation1();
$a->operation3('参数1');
echo $a->attribute1 . "<br>";
$e = clone $a;	// 复制对象
$e->attribute1 = '###new param';
echo $a->attribute1 . "旧a的值<br>";
echo $e->attribute1 . "新e的值<br>";

$d->operation1();
$d->operation4();
echo classname::PI . "<br>";
echo classname::squared(4) . "<br>";
echo ($d instanceof classname) . "<br>";
echo "<hr>";

class myClass{
	public $a = "5";
	public $b = "7";
	public $c = "9";
}
$x = new myClass;
echo '遍历对象属性<br>';
foreach ($x as $attr) {
	echo $attr . "<br>";
}
$cls = new ReflectionClass("myClass");
echo "<pre>$cls</pre>";
echo "<hr>";

?>
