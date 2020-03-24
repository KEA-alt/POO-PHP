<?php

spl_autoload_register(function ($class_name) {
    include './classes/' . $class_name . '.php';
});

$pika = new Warrior('Pikachu');
$harry = new Mage('Harry Potter');


while ($pika->getLifePoints() > 0 && $harry->getLifePoints() > 0) {
    $pika->attack($harry);
    if ($harry->getLifePoints() > 0) {
        $harry->attack($pika);
    }
}

var_dump($pika, $harry);