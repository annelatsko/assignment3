<?php 
	include 'ChildClass.php';
	$hero = new ChildClass("", "", "ejtn", "");
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Assignment 3</title>

	<link type="text/css" rel="stylesheet" href="assignment3.css" />
</head>
<body>
	<?php
    if (!isset($_POST['Submit'])) {
	?>
		<h3>Enter your information.</h3>
		<form method="post">
			Superhero Name:
			<br><input type="text" name="name" id="name"> <br>
			Superhero Power:
			<br><input type="text" name="power" id="power"> <br>
			City You Protect:
			<br><input type="text" name="city" id="city"> <br>
			Alter Ego:
			<br><input type="text" name="alterEgo" id="alterEgo"> <br>
			<input type="submit" value="Submit" name = "Submit">
		</form>
	<?php
	  }
	  else {
	    echo "<h5>INPUT SUCCESSFUL</h5>";
	    $hero->setName($_POST['name']); 
			$hero->setPower($_POST['power']);
			$hero->setCity($_POST['city']);
			$hero->setAlterEgo($_POST['alterEgo']);

			echo $hero;
	?>
			<h5>I will now print Batman the same number of times as there letters in the input for power that you gave me, for verification purposes.</h5>
			<?php $hero->repeatBatmanForLengthOfStringPower(); 

	  }
	?>

	<p>I dearly hope the above counts as styled.</p>
</body>
</html>