<!DOCTYPE html>
<!--	Author: Mike O'Kane
		Date:	December, 2016
		File:	employee-pay.php
		Purpose: OOP Example
-->

<html>
<head>
	<title>OOP Example</title>
	<link rel ="stylesheet" type="text/css" href="sample.css"  />
</head>
<body>
<?php
	include("inc-employee-object.php");

	$id = $_POST["id"];

	$emp1 = new Employee();

	$emp1->findEmployee($id);

	print ("<p>Weekly Pay for ".$emp1->getFirstName()." ". $emp1->getLastName().": $".$emp1->getWeeklyPay()."</p>");
?>
</body>
</html>

