<?php

include_once('functions/utility-functions.php');

$lineNumber = 0;
$fullName = [];

$FH = fopen("names-short-list.txt", "r");

$nextName = fgets($FH);

while(!feof($FH)) {
    
    if($lineNumber % 2 == 0) {
        $fullName[] = substr($nextName, 0, strpos($nextName, " --"));
    }
    
    $lineNumber++;
    $nextName = fgets($FH);
}

for($i = 0; $i < sizeof($fullName); $i++) {
    if(preg_match("/^([A-Z][a-zA-Z']+), ([A-Z][a-zA-Z']+)/", $fullName[$i] )) {
        $validName[] = $fullName[$i];
    }
    
}

?>

<h1>Results</h1>

<h2>List of unique names</h2>


<?php 

"<p>There are " . sizeof($validName) . " valid array names</p>";

loop_dump($validName);


$uniqueValidNames = (array_unique($validName));

echo ("<p>There are " . sizeof($uniqueValidNames) . " valid array names</p>");

loop_dump($uniqueValidNames); 

echo "<hr>";
?>








