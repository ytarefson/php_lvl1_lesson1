<?
$menu = array(
	'menu' => array('home','archive','contact')
);
foreach ($menu as $key => $value) {
	echo "<ul id=\"$key\">";
	for ($i=0; $i <count($value) ; $i++) { 
		echo "<li><a href=\"#\">$value[$i]</a></li>";
	}
	echo "</ul>";
}
?>