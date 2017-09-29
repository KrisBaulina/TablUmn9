<?php
echo "<table border=1>";
echo "<tr>";
	for ($y=1;$y<=10;$y++){
		echo "<td><p> Умножение на $y </p> </td>";
	};	
	echo "</tr><tr> ";
for ($x=1;$x<=10;$x++){
		for ($y=1;$y<=10;$y++){
		$z=($x*$y);		
		echo "<td><p> $x*$y=$z </p> </td>";
	};	
	echo "</tr>";
};
echo "</table>"
?> 