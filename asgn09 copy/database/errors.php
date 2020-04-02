<?php
function database_is_connected_error($connect) {
if (!$connect) {
	die("ERROR: Cannot connect to database " . DB . " on server " . SERVER .  
	" using user name . USER  (".mysqli_connect_errno().
	", ".mysqli_connect_error().")");
    }
}

function cannot_run_query_error($result) {
    if (!$result) {
        die("Could not successfully run query ($userQuery) from $db: " .	
            mysqli_error($connect) );
    }
}