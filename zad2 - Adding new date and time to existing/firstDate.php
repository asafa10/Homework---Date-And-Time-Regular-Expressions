<?php

require_once 'func.php';
require_once 'index.php';

$day = getValue($_POST, 'day');
$month = getValue($_POST, 'month');
$year = getValue($_POST, 'year');
$hour = getValue($_POST, 'hour');
$minutes = getValue($_POST, 'minutes');
$seconds = getValue($_POST, 'seconds');

$dayCheck = false;
$monthCheck = false;
$yearCheck = false;
$hourCheck = false;
$minutesCheck = false;
$secondsCheck = false;
$finalCheck = false;


$result = '';
$class = '';

$error = '';

if ( empty($_POST) ) {
	$result = "Plese insert data into the fields below!";
	$class = 'black';
}

else {
	//daycheck
	if (empty($day))
		$error = 'Incorrect or Empty!!';
	else if ( !isNumeric($day) )
		$error = 'Incorrect or Empty!!';
	else if ( ($day < 1) || ($day > 31) )
		$dayCheck = false;
	else
		$dayCheck = true;

	//monthcheck
	if (empty($month))
		$error = 'Incorrect or Empty!!';
	else if ( !isNumeric($month) )
		$error = 'Incorrect or Empty!!';
	else if ( ($month < 1) || ($month > 12) )
		$monthCheck = false;
	else
		$monthCheck = true;

	//yearcheck
	if (empty($year))
		$error = 'Incorrect or Empty!!';
	else if ( !isNumeric($year) )
		$error = 'Incorrect or Empty!!';
	else if ( $year < 0 )
		$yearCheck = false;
	else
		$yearCheck = true;

	//hourscheck1
	if (empty($hour))
		$error = 'Incorrect or Empty!!';
	else if ( !isNumeric($hour) )
		$error = 'Incorrect or Empty!!';
	else if ( $hour < 0 )
		$hourCheck = false;
	else
		$hourCheck = true;

	//minutescheck1
	if (empty($minutes))
		$error= 'Incorrect or Empty!!';
	else if ( !isNumeric($minutes) )
		$error = 'Incorrect or Empty!!';
	else if ( $minutes < 0 )
		$minutesCheck = false;
	else
		$minutesCheck = true;

	//secondscheck1
	if (empty($seconds))
		$error = 'Incorrect or Empty!!';
	else if ( !isNumeric($seconds) )
		$error = 'Incorrect or Empty!!';
	else if ( $seconds < 0 )
		$secondsCheck = false;
	else
		$secondsCheck = true;
}

if ( ($dayCheck == true) && ($monthCheck == true) && ($yearCheck == true) 
		&& ($hourCheck == true) && ($minutesCheck == true) && ($secondsCheck == true) ) {
	$result = 'Correct date!';
	$class = 'green';
	$finalCheck = true;
}

else {
	if  (!empty($_POST) ) {
		$result = 'The date is not correct!';
		$class = 'red';
	}
		
}