<?php 
spl_autoload_register('myAutoLoad', true, true);

function myAutoLoad($className)
{
    echo "所有的包含工作交给我\n";
    $classFileName = "./{$className}.php";
    echo "我来包含{$classFileName}\n";
    include $classFileName;
}

$obj = new AutoloadClass();
?>