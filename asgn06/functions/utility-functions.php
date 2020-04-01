<?php

function dd($value) {
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
}
        
function loop_dump($ary) {        
    echo '<ul style="list-style-type:none">';    
    foreach($ary as $value) {
        echo "<li>$value</li>";
    }
        echo "</ul>";
}