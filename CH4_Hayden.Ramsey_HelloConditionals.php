<?php
/*Hayden Ramsey
ITSE 1306
May 26th, 2017
Chapter 4, Hello Conditionals*/

$studentName = "Hayden Ramsey";
echo $studentName;
echo "<br />";

$date = date("l") . "<br>";

if ($date == "Thursday")
{
	echo "Today is thursday.";	
	echo "<br />";
}
else if ($date == "Wednesday")
{
	echo "Today is wednesday.";
	echo "<br />";
}
else
{
	echo "It is not wednesday or thursday.";
	echo "<br />";
}

$play = "Rock";
switch ($play)
{
	case "Paper":
		echo "You win!";
		break;
	case "Scissors":
		echo "You lose!";
		break;
	case "Rock":
		echo "You tied!";
		break;	
}
?>
