<?php
/*Hayden Ramsey
ITSE 1306
May 22nd, 2017
Chapter 4, Hello Operators*/

$studentName = "Hayden Ramsey";
echo $studentName;
echo "<br />";

echo "1. [" . (2 < 1) . "]<br />";
echo "2. [" . (19 == 19) . "]<br />";
echo "3. [" . (100 > 99) . "]<br />";
echo "4. [" . (0 < 0) . "]<br />";

echo $studentName;
echo "<br />";

if ($studentName == "Hayden Ramsey")
{
	$variable = "True";
}
echo $variable;
echo "<br />";

$a = 1;
$b = 5;
$c = 10;
 
echo $a + $b;
echo "<br />";

$ac = $a + $c;
echo $ac;
echo "<br />";

echo $c > $a;
echo "<br />";

echo $c--;
echo "<br />";

echo $b and $c;
echo "<br />";

echo $c . $b;
echo "<br />";

echo $a == $b;
echo "<br />";

echo $a != $b;
echo "<br />";

echo $c > $a;
?>