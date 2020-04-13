<!DOCTYPE html>
<!--	Author: Chalie Wallin
		Date:	3/30/20
		File:	raises.php
		Purpose:MySQL Exercise
-->

<html>
<head>
	<title>MySQL Query</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>

<body>
<?php
include_once("database/connection.php");
$connect = mysqli_connect(SERVER, USER, PW, DB);


if (!$connect) 
{
	die("ERROR: Cannot connect to database $db on server $server 
	using user name $user (".mysqli_connect_errno().
	", ".mysqli_connect_error().")");
}
$userQuery = "SELECT empID, firstName, lastName";
$userQuery .= " FROM personnel";
$userQuery .= " WHERE hourlyWage < 10.00";

$result = mysqli_query($connect, $userQuery);

if (!$result) {
	die("Could not successfully run query ($userQuery) from $db: " .	
		mysqli_error($connect) );
}

if (mysqli_num_rows($result) == 0) {
	print("No records found with query $userQuery");
}
else { 

	echo "<h1>List of Employees Who Need a Raise</h1>";
	echo "<table border=\"1\" width=\"2em\">";
	echo "<tr><th>EmpID</th><th>First</th><th>Last</th></tr>";
	
	while($row = mysqli_fetch_assoc($result)) { 
		echo ("<tr><td>" . $row['empID'] . "</td><td>" . $row['firstName'] . "</td><td>" . $row['lastName'] . "</td></tr>");
	}
	echo "</table>";
}
	mysqli_close($connect); 
?>

</body>
</html>
