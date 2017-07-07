<?php
/*
Hayden Ramsey
ITSE 1306
2017.06.19
Chapter 6 PHP code assignment
*/
$MyFavQuote = "Smile, nod, agree, then do whatever you were going to do anyway. --Robert Downy Jr.";
$user[] = "hramsey98";
$user[] = "Hayden Ramsey";
$user[] = "EgatlOv685";
$user[] = "903-555-1212";
$user[] = "hramsey98@gmail.com";
$user[] = "2650 S East End Blvd, Marshall, TX 75670";
$class['ClassName'] = "ITSE 1306";
$class['ClassSubject'] = "PHP Programming";
$class['InstructorName'] = "Will Winans";
$grocery_list = array(
	'meats' => array(
		'Hamburger', 'Sausage', 'Pork', 'Chicken'
	),
	'frozen' => array(
		'French Fries', 'Chicken Nuggets', 'Hot Pockets', 'Pizza'
	),
	'produce' => array(
		'Potatoes', 'Bananas', 'Strawberries', 'Lettuce', 'Grapes'
	),
	'condiments' => array(
		'Ketchup' , 'Mustard', 'Mayonaise', 'Ranch Dressing', 'BBQ Sauce'
	),
	'pasta' => array(
		'White Rice', 'Spagetti', 'Raviloi', 'Spagetti O\'s'
	),
	'baking' => array(
		'Sugar', 'Salt', 'Pepper'
	),
	'health' => array(
		'Ibuprofen', 'Alka Seltzer', 'Tums'
	)
);
echo "For loop to display the user array<br>" . PHP_EOL;
for($i = 0; $i < count($user); $i++)
{
	echo '$user[' . $i . '] = ' . $user[$i] . '<br>' . PHP_EOL;
}
echo "For loop to display the user array<br>" . PHP_EOL;
$j = 0;
foreach($class as $item)
{
	echo '$class[' . $j . '] = ' . $item . '<br>' . PHP_EOL;
	$j++;
}
echo "Nested foreach loop to display the grocery_list array<br>" . PHP_EOL;
foreach($grocery_list as $label => $department)
{
	echo '$department = ' . $label . '<br>' . PHP_EOL;
	$j++;
	foreach($department as $item)
	{
		echo '$item = ' . $item . '<br>' . PHP_EOL;
	}
}
asort($grocery_list, SORT_REGULAR);
echo "Nested foreach loop to display the grocery_list array after it has been sorted<br>" . PHP_EOL;
foreach($grocery_list as $label => $department)
{
	echo '$department = ' . $label . '<br>' . PHP_EOL;
	$j++;
	foreach($department as $item)
	{
		echo '$item = ' . $item . '<br>' . PHP_EOL;
	}
}
$MyFavQuote = explode('--', $MyFavQuote);
echo "<pre>";
print_r($MyFavQuote);
echo "</pre>";
?>
