<?
echo 'main<pre>';
#include('.\A.php');
#include('A.php');
#include('B.php');
#require('B.php'); 		# 与include一样，只不过提示致命错误而不是警告.
#require_once('B.php');

include_once('.\A.php');
include_once('A.php');
include_once('B.php');

fa();
fb();

echo '</pre>';
?>