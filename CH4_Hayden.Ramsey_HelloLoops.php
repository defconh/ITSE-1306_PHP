<?php
/*Hayden Ramsey
ITSE 1306
May 26th, 2017
Chapter 4, Hello Conditionals*/

$studentName = "Hayden Ramsey";
echo $studentName;
echo "<br /";

$count = -1;
while ($count <= 20)
{
	echo "$count x 5 = " . $count*5 . "<br />";
	++$count;
}

echo "<br />";

$count = 0;
do
	echo "$count x 10 = " . $count*10 . "<br />";
while (++$count <= 20);

echo "<br />";

for ($count = 0; $count <= 20; ++$count)
{
	echo "$count x 20 = " . $count*20 . "<br />";
}
?>
