<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	var_dump($_GET);
	echo "<br>";
	$firstname = $_GET['first'];
	$lastname = $_GET['last'];
	$age = $_GET['age'];
	$gender = $_GET['Gender'];
	$ambition = $_GET['ambition'];
	echo "The users first name is $firstname";
	echo "The users last name is $lastname";
	echo "The users age is $age";
	echo "The user is a $gender";
	echo "He plans to be an $ambition";
	
	?>

</body>
</html>