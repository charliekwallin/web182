<!DOCTYPE html>
<!--	Author: Mike O'Kane
		Date:	December, 2016
		File:	new-employee.php
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
	$firstName = $_POST["firstName"];
	$lastName = $_POST["lastName"];
	$title = $_POST["jobTitle"];
	$hourlyWage = $_POST["wage"];

	$emp = new Employee();
	$emp->setID($id);
	$emp->setFirstName($firstName);
	$emp->setLastName($lastName);
	$emp->setJobTitle($title);
	$emp->setHourlyWage($hourlyWage);
	$emp->addEmployee();

	print("The new employee ($id) has been added to the employee file.");
?>
</body>
</html>