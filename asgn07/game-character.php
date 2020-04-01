<?php

include_once('inc-game-character-object.php');

// create a new instance 

$player1 = new GameCharacter();
$player2 = new GameCharacter();

$player1->setPlayerName('Billy');
$player2->setPlayerName('Susan');

$player1->setScore(100);
$player2->setScore(99);


echo "<p>player 1 is: " . $player1->getPlayerName()  . "</p>";
echo "<p>player 2 is: " . $player2->getPlayerName()  . "</p>";

if($player1->getScore() > $player2->getScore()) {
    echo "Player 1 wins";
} elseif  ($player2->getScore() > $player1->getScore()) {
    echo "Player 2 wins";
} else {
    echo "Tie.";
}