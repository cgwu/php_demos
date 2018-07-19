<?
echo '<pre>';
echo "1) ".basename("/etc/sudoers.d").PHP_EOL;
echo "1) ".basename("/etc/sudoers.d", ".d").PHP_EOL;
echo "2) ".basename("/etc/passwd").PHP_EOL;
echo "3) ".basename("/etc/").PHP_EOL;
echo "4) ".basename(".").PHP_EOL;
echo "5) ".basename("/");
echo PHP_EOL;
echo PHP_EOL;

$path = 'H:\Workspace\php\HelloPHP\readme.txt';
echo dirname($path).PHP_EOL;

$arr = pathinfo($path);
print_r($arr);

echo realpath('.').PHP_EOL;
echo realpath('..').PHP_EOL;

echo filesize($path).' bytes'.PHP_EOL;
echo "C盘可用空间:" . round(disk_free_space("c:")/1024/1024/1024,2)."GB".PHP_EOL;
echo PHP_EOL;

// 设置默认时区。PHP 5.1 之后版本可用
// date_default_timezone_set('UTC');
date_default_timezone_set('Asia/Shanghai');

echo 'a time'.date('Y-m-d,h:i:s', fileatime($path)).PHP_EOL;
echo 'c time'.date('Y-m-d,h:i:s', filectime($path)).PHP_EOL;
echo 'm time'.date('Y-m-d,h:i:s', filemtime($path)).PHP_EOL;
echo '</pre>';
?>