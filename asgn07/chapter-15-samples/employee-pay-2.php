<!DOCTYPE html>
<!--	Author: Mike O'Kane
		Date:	December, 2016
		File:	employee-pay2.php
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

	$emp1 = new Employee();
	$emp2 = new Employee();

	$emp1->findEmployee("012345");
	$emp2->findEmployee("345678");

	print ("<p>Weekly Pay for ".$emp1->getFirstName()." ". $emp1->getLastName().": $".$emp1->getWeeklyPay()."</p>");
	print ("<p>Weekly Pay for ".$emp2->getFirstName()." ". $emp2->getLastName().": $".$emp2->getWeeklyPay()."</p>");
?>
</body>
</html>