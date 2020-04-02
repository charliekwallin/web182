<?php
// local using variables
// $server = "localhost";
// $user = "wbip";
// $pw = "wbip123";
// $db = "test";

// local using constants

define("SERVER", "localhost");
define("USER", "wbip");
define("PW", "wbip123");
define("DB", "test");

global $connect;
$connect = mysqli_connect(SERVER, USER, PW, DB);



// siteground
// $server = "localhost";
// $user = "charl989_admin";
// $pw = "Gabc";
// $db = "charl989_test";