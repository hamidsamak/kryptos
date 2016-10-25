<!--
	Kryptos
	http://github.com/hamidsamak/kryptos
-->

<style type="text/css">
* {
	font-family: courier;
	font-size: 12pt
}

td td {
	width: auto;
	padding: 2px 5px;
	text-align: center
}
</style>

<?php

$tableau = parse_ini_file('tableau.txt');

$i = 0;
print '<table>';

foreach ($tableau as $value) {
	if ($i % 2 < 1)
		print '<tr>';

	print '<td>';
	print '<table border="1">';

	$value = explode("\n", $value);

	foreach ($value as $key => $line) {
		$line = str_split($line);

		print '<tr>';

		foreach ($line as $char)
			print '<td>' . $char . '</td>';

		print '</tr>';
	}

	print '</table>';
	print '</td>';

	if ($i % 2 > 0)
		print '</tr>';

	$i += 1;
}

print '</table>';

?>