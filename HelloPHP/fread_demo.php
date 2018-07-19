<?
$fp = fopen('test.txt','r');
$contents = fread($fp, filesize('./test.txt'));
fclose($fp);
echo $contents;
?>

