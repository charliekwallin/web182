<!DOCTYPE html>
<!--	Author: Mike O'Kane
		Date:	August, 2017
		File:	modify1.php
		Purpose: Chapter 15 Exercise
		
		Modify1.html asks the user for an employee ID. Modify1.php receives the ID,
		creates an Employee instance, looks up the employee data using the ID, 
		and displays the weekly pay for the employee.
		
		Modify this application so that Modify1.html asks for three ID's, and Modify1.php
		receives the three ID's and uses three Employee instances to obtain and display the 
		pay for all three.
			
		Here are three valid ID's to test this: 003345, 012345, 123456
-->

<html>
<head>
	<title>Modify 1</title>
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


