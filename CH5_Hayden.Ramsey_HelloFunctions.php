<?php
/*Hayden Ramsey
ITSE 1306
January 23rd, 2018
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
		//code and stuff
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
