<?php

/*$data = json_decode(stripslashes($_POST['data']));
$foo = $data->foo;
$data = $data->bar;

$foo = ($foo === true) ? 1 : 0;

echo $foo."<br/>\n";
foreach ($data as $d) {
	echo $d."<br/>\n";
}*/

$str = $_POST['str'];
$base = basename($str, ".js");
echo "<script type=\"text/javascript\" src=\"$str\"></script>\n";
echo "<script type=\"text/javascript\">";
echo "window.onload = function(){";
echo "";
echo "};";
echo "<\script>";

echo "<div id='foobar'>";
echo "</div>";

?>