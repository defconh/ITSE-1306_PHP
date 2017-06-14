<?php
/*Hayden Ramsey
ITSE 1306
May 30th, 2017
Chapter 5, Hello Classes*/
include "CH5_Hayden.Ramsey_HelloFunctions.php";

function make_proper($firstname, $lastname)
{
	$firstname = strtolower($firstname) ;
	$firstname = ucfirst($firstname);
	
	$lastname = strtolower($lastname);
	$lastname = ucfirst($lastname);
	
	$name = $firstname . $lastname;
	
	return 	$name;
}

echo make_proper("hAydEn ", "raMsEY");


$user = new PotentialUser("hwramsey","Hayden","Ramsey","randompassword156","903-555-1212","hramsey98@gmail.com","2650 S East End Blvd., Marshall, TX  75670");
$enrolleduser new EnrolledUser(clone $user);

$enrolleduser->classname = "ITSE 1306";
$enrolleduser->subject = "PHP Programming";
$enrolleduser->instructor = "Will Winans";

?>
