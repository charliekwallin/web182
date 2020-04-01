<!DOCTYPE html>
<!--	Author: Charlie Wallin
		Date:	3/30/20
		File:	wage-report.php
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

if( !$connect) 
{
	die("ERROR: Cannot connect to database " . DB . " on server $server 
	using user name $user (".mysqli_connect_errno().
	", ".mysqli_connect_error().")");
}

$hourlyWage = $_POST['hourlyWage'];
$jobTitle = $_POST['jobTitle'];

$userQuery = "SELECT * ";
$userQuery .= "FROM personnel ";
$userQuery .= "WHERE jobTitle = \"$jobTitle\" ";
$userQuery .= "AND hourlyWage > $hourlyWage";

$result = mysqli_query($connect, $userQuery);

if (!$result) 
{
	die("Could not successfully run query ($userQuery) from " . DB . ": " . mysqli_error($connect) );
}

if (mysqli_num_rows($result) == 0) 
{
	echo("No records found with query $userQuery");
}
else 
{ 
	echo("<h1>RESULTS</h1>");
	echo("<p>The following employees have the $jobTitle job title, and an hourly wage of $".
			number_format($hourlyWage, 2)." or higher:</p>");
			
	echo("<table border = \"1\">");
	echo("<tr><th>EMP ID</th><th>First</th><th>Last</th><th>Wage</th></tr>");
	while ($row = mysqli_fetch_assoc($result)) {
		echo "<tr><td>" . $row['empID'] . "</td><td>" . $row['firstName'] . "</td><td>" . $row['lastName'] . "</td><td>" . $row['hourlyWage'] . "</td></tr>";
	}

	print ("</table>");
}

mysqli_close($connect);   // close the connection
 
?>
</body>
</html>
