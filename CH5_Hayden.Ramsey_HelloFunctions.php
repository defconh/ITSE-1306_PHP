<?php
/*Hayden Ramsey
ITSE 1306
May 30th, 2017
Chapter 5, Hello Functions*/

function make_upper($input)
{
	$input = strtolower($input);
	$input = ucfirst($input);
	return $input;
}
echo make_upper("thiS StrInG Is NOt CorRecT");

class PotentialUser
{
	function User($username, $fname, $lname, $password, $pnumber, $email, $address)
	{
		$username = "hwramsey";
		$fname = "Hayden";
		$lname = "Ramsey";
		$password = "*******";
		$pnumber = "936-652-4543";
		$email = "hramsey98@gmail.com";
		$address = "CR 4804, Marshall Texas";
	}
}

class EnrolledUser extends PotentialUser
{
	function User($classname, $subject, $instructor)
	{
		$classname = "ITSE 1306";
		$subject = "PHP Programming";
		$instructor = "Will Winans";
	}
}


?>
