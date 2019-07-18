<?php 
class MethodTest {
    public function __call($name, $argumentes)
    {
        echo "calling object method '$name' 的参数:" . 
        implode(',', $argumentes) . "\n";
    }

    public static  function __callStatic($name, $argumentes)
    {
        echo "calling static method '$name' 的参数:" . 
        implode(',', $argumentes) . "\n";
    }
}
$obj = new MethodTest ;
$obj->runTestObj ('in object context','另外一个参数');

MethodTest::runTest ('in static context','另外一个参数');   // PHP 5.3.0之后版本

?>
