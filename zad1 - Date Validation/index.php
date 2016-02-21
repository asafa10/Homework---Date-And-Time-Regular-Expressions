<?php

require 'func.php';

$month = getValue($_POST, 'month');
$day = getValue($_POST, 'day');
$year = getValue($_POST, 'year');

$dayCheck = false;
$monthCheck = false;
$yearCheck = false;

$result = '';
$class = '';

$errorDay = '';
$errorMonth = '';
$errorYear = '';

if ( empty($_POST) ) {
	$result = "Plese insert data into the fields below!";
	$class = 'black';
}
	
else {
	//daycheck
	if (empty($day)) 
		$errorDay = 'Empty value!';
	else if ( !isNumeric($day) )
		$errorDay = 'Enter Number!';
	else if ( ($day < 1) || ($day > 31) )
		$dayCheck = false;
	else 
		$dayCheck = true;
	
	//monthcheck
	if (empty($month))
		$errorMonth = 'Empty value!';
	else if ( !isNumeric($month) )
		$errorMonth = 'Enter Number!';
	else if ( ($month < 1) || ($month > 12) )
		$monthCheck = false;
	else
		$monthCheck = true;
	
	//yearcheck
	if (empty($month))
		$yearCheck = 'Empty value!';
	else if ( !isNumeric($month) )
		$errorYear = 'Enter Number!';
	else if ( $year < 0 )
		$yearCheck = false;
	else
		$yearCheck = true;
}

if ( ($dayCheck == true) && ($monthCheck == true) && ($yearCheck == true) ) {
	$result = 'Correct date!';
	$class = 'green';
}
	

else {
	if  (!empty($_POST) ) {
		$result = 'The date is not correct!';
		$class = 'red';
	}
			
}
	
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Date and time</title>
		
		<style type="text/css">
		
		fieldset {
			margin-top: 60px;
			border: 2px solid green;
		}
		
		div {
			display: inline-block;
		}
		
		label {
			margin-right: 1px;
			font-style: italic;
			font-size: 1.1em;
		}
		
		input{
			margin-right: 10px;
			width: 100px;
			text-align: center;
			border-radius: 5px;
		}
		
		
		form {
			background-color: rgba(209, 209, 224, 0.9);
			text-align: center;
		}
		
		#submit {
			font-size: 1.05em;
			height: 25px;
			width: 100px;
			border-radius: 8px;
			background-color: rgba(0, 153, 0, 0.4);
		}
		
		form div.error {
			color: red;
		}
		
		p {
			position: relative;
			top: 33px;
			text-align: center;
			font-weight: bold;
			font-size: 1.3em;
			color: blue;
		}
		
		span {
			color: red;
		}
		
		.green{
			color: green;
		}
		
		.red{
			color: red;
		}
		
		.black{
			color: black;
		}
		
		
		</style>
		
	</head>
		
		<body>
			<a href=""></a>
			<form method="post">
				<fieldset>
				 <h3 class="<?= $class ?>" ><?= $result ?></h3>
					<legend><strong>Date Validation</strong></legend>
					
					<div>
						<label for="day">Enter day</label>
						<input type="text" id="day" name="day"/>
						<span><?= $errorDay ?></span>
					</div>
					
					<div>
						<label for="">Enter month:</label>
						<input type="text" id="month" name="month"/>
						<span><?= $errorMonth ?></span>
					</div>
					
					<div >
						<label for="">Enter year:</label>
						<input type="text" id="year" name="year"/>
						<span><?= $errorYear ?></span>
					</div>
					
						
					<button id="submit" type="submit">Submit</button>
				
			
				</fieldset>
			</form>
			
		</body>
</html>
