<?php

$server = "localhost";
$user = "wbip";
$pw = "wbip123";
$db = "test";
$port = "8080";
$connect = mysqli_connect($server, $user, $pw, $db, $port);

if ($connect) {
  die("ERROR: Cannot connect to database $db on server $server using user name $user('.mysqli_connect_errno().', '.mysqli_connect_error().')");
}

mysqli_close($connect);
