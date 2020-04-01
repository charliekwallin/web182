<<<<<<< HEAD
<!DOCTYPE html>
<!--	Author: Charlie Wallin
		Date:	3/30/20
		File:	name-change.php
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
$connect=mysqli_connect(SERVER, USER, PW, DB);

if( !$connect) 
{
	die("ERROR: Cannot connect to database " . DB . " on server $server 
	using user name $user (".mysqli_connect_errno().
	", ".mysqli_connect_error().")");
}
//12353
$userQuery = "UPDATE personnel ";
$userQuery .= "SET lastName = \"Jackson\" ";
$userQuery .= ", jobTitle = \"Manager\" ";
$userQuery .= "WHERE empID = 12353";

$result = mysqli_query($connect, $userQuery);

if (!$result) 
{
	die("Could not successfully run query ($userQuery) from " . DB .	
		mysqli_error($connect) );
}
else
{
	print("	<h1>UPDATE</h1>");
	print ("<p>The employee update has been completed.</p>");
}

mysqli_close($connect);   
?>

</body>
</html>
=======
<!DOCTYPE html>
<!--	Author: Charlie Wallin
		Date:	3/30/20
		File:	name-change.php
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
$connect=mysqli_connect(SERVER, USER, PW, DB);

if( !$connect) 
{
	die("ERROR: Cannot connect to database " . DB . " on server $server 
	using user name $user (".mysqli_connect_errno().
	", ".mysqli_connect_error().")");
}
//12353
$userQuery = "UPDATE personnel ";
$userQuery .= "SET lastName = \"Jackson\" ";
$userQuery .= ", jobTitle = \"Manager\" ";
$userQuery .= "WHERE empID = 12353";

$result = mysqli_query($connect, $userQuery);

if (!$result) 
{
	die("Could not successfully run query ($userQuery) from " . DB .	
		mysqli_error($connect) );
}
else
{
	print("	<h1>UPDATE</h1>");
	print ("<p>The employee update has been completed.</p>");
}

mysqli_close($connect);   
?>

</body>
</html>
>>>>>>> dev
