<?
$prices = array( 'Tires'=>100 );
$prices['Oil油'] = 10;
$prices['Spark Plugs'] = 4;

foreach ($prices as $key => $value) {
	echo $key." – ".$value."<br />";
}
echo '<hr>';
reset($prices);
while ($element = each($prices)) {
	echo $element['key'];
	echo " – ";
	echo $element['value'];
	echo "<br />";
}

echo '<hr>';
reset($prices);
while (list($product, $price) = each($prices)) {
echo "$product - $price<br />";
}


?>