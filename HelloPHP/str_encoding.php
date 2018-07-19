<?
$str = 'abc中国,';
echo strlen($str);
echo '<br>';
echo mb_strlen($str,'UTF-8');

echo '<br>';
echo mb_strlen($str,'GBK');
echo '<br>';
echo mb_strstr($str,'国','utf8');
echo '<br>';
echo mb_strstr($str,'国','GBK');


echo '<br>';
echo mb_strpos($str,'国',0, 'utf8');
echo '<br>';
echo mb_substr($str,3,2,'utf8');

?>