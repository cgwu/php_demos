<?
$fp = fopen('test.txt','w+');
fwrite($fp,'hello中国');
fclose($fp);
echo 'done!';
?>