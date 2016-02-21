<?php


require_once 'func.php';
require_once 'index.php';

$day2 = getValue($_POST, 'day2');
$month2 = getValue($_POST, 'month2');
$year2 = getValue($_POST, 'year2');
$hour2 = getValue($_POST, 'hour2');
$minutes2 = getValue($_POST, 'minutes2');
$seconds2 = getValue($_POST, 'seconds2');



$dayCheck2 = false;
$monthCheck2 = false;
$yearCheck2 = false;
$hourCheck2 = false;
$minutesCheck2 = false;
$secondsCheck2 = false;
$finalCheck2 = false;

$result2 = '';
$class = '';

$error2 = '';

if ( empty($_POST) ) {
	$result = "Plese insert data into the fields below!";
	$class = 'black';
}

else {
	//daycheck
	if (empty($day2))
		$error2 = 'Incorrect or Empty!';
	else if ( !isNumeric($day2) )
		$error2 = 'Incorrect or Empty!';
	else if ( ($day2 < 1) || ($day2 > 31) )
		$dayCheck2 = false;
	else
		$dayCheck2 = true;

	//monthcheck
	if (empty($month2))
		$error2 = 'Incorrect or Empty!';
	else if ( !isNumeric($month2) )
		$error2 = 'Incorrect or Empty!';
	else if ( ($month2 < 1) || ($month2 > 12) )
		$monthCheck2 = false;
	else
		$monthCheck2 = true;

	//yearcheck
	if (empty($year2))
		$error2 = 'Incorrect or Empty!';
	else if ( !isNumeric($year2) )
		$error2 = 'Incorrect or Empty!';
	else if ( $year2 < 0 )
		$yearCheck2 = false;
	else
		$yearCheck2 = true;

	//hourscheck1
	if (empty($hour2))
		$error2 = 'Incorrect or Empty!';
	else if ( !isNumeric($hour2) )
		$error2 = 'Incorrect or Empty!';
	else if ( $hour2 < 0 )
		$hourCheck2 = false;
	else 
		$hourCheck2 = true;

	//minutescheck1
	if (empty($minutes2))
		$error2= 'Incorrect or Empty!';
	else if ( !isNumeric($minutes2) )
		$error2 = 'Incorrect or Empty!';
	else if ( $minutes2 < 0 )
		$minutesCheck2 = false;
	else
		$minutesCheck2 = true;

	//secondscheck1
	if (empty($seconds2))
		$error2 = 'Incorrect or Empty!';
	else if ( !isNumeric($seconds2) )
		$error2 = 'Incorrect or Empty!';
	else if ( $seconds2 < 0 )
		$secondsCheck2 = false;
	else
		$secondsCheck2 = true;
}

if ( ($dayCheck2 == true) && ($monthCheck2 == true) && ($yearCheck2 == true) 
		&& ($hourCheck2 == true) && ($minutesCheck2 == true) && ($secondsCheck2 == true) ) {
	$result2 = 'Correct date!';
	$class = 'green';
	$finalCheck2 = true;
}

else {
	if  (!empty($_POST) ) {
		$result2 = 'The date is not correct!';
		$class = 'red';
	}

}