<?php
//CH3_<Hayden.Ramsey>_HelloWorld.php

/*Hayden Ramsey
ITSE 1306
January 22nd, 2018
*/

echo "Hello World!";
echo "<br />";

$studentName = "Hayden Ramsey";
echo $studentName;

$myArray= array(array('1','2','3'),
				array('4','5','6'),
				array('7','8','9'));
echo "<br />";	
		
echo $myArray[1][1];
echo "<br />";

echo "My name is $studentName.";
echo '<br />';

echo substr($studentName, 0, 7);
echo "<br />";

$x = 30;
$y = 20;
$z = $x * $y;
echo "$x mulitplied by $y equals $z.";
echo "<br />";

echo date("l") . "<br>";
?>
