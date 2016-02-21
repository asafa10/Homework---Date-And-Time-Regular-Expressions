<?php

require_once 'func.php';
require_once 'firstDate.php';
require_once 'secondDate.php';

$result3 = '';
$d = getValue($_POST, 'DateChoice');

if (empty($_POST)) {
	$result3 ='Please insert data into the fields below. All fields are required!';
	$class = 'black';
}

else if ($result != $result2) {
	$result3 = "Not correct date/time! All fields are reqired!";
	$class = 'red';
}

else {
	$result3 = 'Correct date!';
	$class = 'green';
}

$newDate = NULL;

if ( ($finalCheck == true) && ($finalCheck2 == true) ) {
	
	$day += $day2;
	$month += $month2;
	$year += $year2;
	
	$hour += $hour2;
	$minutes += $minutes2;
	$seconds += $seconds2;
	
	$resultDate= mktime($hour, $minutes, $seconds, $month, $day, $year);
	$newDate = date($d, $resultDate);
	
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
		
		select {
    		 padding: 0 0 0 22px;
		}
		
		select {
			font-weight: bold;
			font-size: 1em;
			
		}
		
		</style>
		
	</head>
		
		<body>
			<a href=""></a>
			<form method="post">
				<fieldset>
				 <h3 class="<?= $class ?>" ><?= $result3 ?></h3>
					<legend><strong>Addind date to existing</strong></legend>
					
					<div>
						<label for="">Enter day</label>
						<input type="text" id="day" name="day"/>
						<span><?= $error ?></span>
					</div>
					
					<div>
						<label for="">Enter month:</label>
						<input type="text" id="month" name="month"/>
						<span><?= $error ?></span>
					</div>
					
					<div >
						<label for="">Enter year:</label>
						<input type="text" id="year" name="year"/>
						<span><?= $error ?></span>
					</div>
					
					<div >
						<label for="">Enter hour:</label>
						<input type="text" id="year" name="hour"/>
						<span><?= $error ?></span>
					</div>
					
					<div >
						<label for="">Enter minutes:</label>
						<input type="text" id="year" name="minutes"/>
						<span><?= $error ?></span>
					</div>
					
					<div >
						<label for="">Enter seconds:</label>
						<input type="text" id="year" name="seconds"/>
						<span><?= $error ?></span>
					</div>
					
					<br />
					<h3>Data to be added:</h3>
					
					<div>
						<label for="">Add day</label>
						<input type="text" id="day2" name="day2"/>
						<span><?= $error2 ?></span>
					</div>
					
					<div>
						<label for="">Add month:</label>
						<input type="text" id="month" name="month2"/>
						<span><?= $error2 ?></span>
					</div>
					
					<div >
						<label for="">Add year:</label>
						<input type="text" id="year" name="year2"/>
						<span><?= $error2 ?></span>
					</div>
					
					<div >
						<label for="">Add hour:</label>
						<input type="text" id="year" name="hour2"/>
						<span><?= $error2 ?></span>
					</div>
					
					<div >
						<label for="">Add minutes:</label>
						<input type="text" id="year" name="minutes2"/>
						<span><?= $error2 ?></span>
					</div>
					
					<div >
						<label for="">Add seconds:</label>
						<input type="text" id="year" name="seconds2"/>
						<span><?= $error2 ?></span>
					</div>
					
					<br />
					<br />
					
					<div>
					<label for="">Choose Format:</label>
						<select name="DateChoice" id="" style="width: 150px;">
							<option value="d:m:Y H:i:s">d:m:Y H:i:s</option>
							<option value="d-m-Y H:i:s">d-m-Y H:i:s</option>
							<option value="d/m/Y H:i:s">d/m/Y H:i:s</option>
							
						</select>
					</div>
					
					<br />
					<br />
					
					<label for="">Result:</label>
					<input type="text" value="<?=$newDate?>" name="the_result" style="width: 202px;" />
					
					<br /><br />	
					<button id="submit" type="submit">Submit</button>
				
			
				</fieldset>
			</form>
			
		</body>
</html>



