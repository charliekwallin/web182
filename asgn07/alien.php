<?php

include_once('inc-alien-object.php');

$zurg = new Alien(8, 15, "Orange");

echo ("<p>My new alien has " . $zurg->getEyes() . " eyes, " . $zurg->getTentacles() . " tentacles and is the color " . $zurg->getColor() . "</p>");