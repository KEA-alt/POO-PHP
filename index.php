<?php


include './classes/autoload.php';
//include './Text/Format.php';

use \classes\Warrior;
use \classes\Mage;

$player1 = new Warrior('Pikachu');
$player2 = new Mage('Harry Potter');

while ($player1->getLifePoints() > 0 && $player2->getLifePoints() > 0) {
    echo $player1->attack($player2);
    echo '<br>';
    $status = "{$player1->name} a gagné le combat!";
    if ($player2->getLifePoints() > 0) {
        echo $player2->attack($player1);
        echo '<br>';
        $status = "{$player2->name} a gagné le combat!";
    }
    echo '<br>';
}

echo $status;

var_dump($player1, $player2);