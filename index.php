<?php

    spl_autoload_register(function ($class_name) {
        include './classes/' . $class_name . '.php';
    });

    $pika = new Warrior('Pikachu');
    $evil = new Mage('Evil');
?>
        
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="description" content="Cette page est un combat continue entre pika et evil" />
    <meta charset="utf-8">
    <title>Fight</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="kevin AMARAL">
</head>

<body>

    <div class="container">
        <table>
            <?php
            while ($pika->getLifePoints() > 0 && $evil->getLifePoints() > 0) {
                $pika->attack($evil);
                echo"
                    <tr>
                        <td><center><img src='img/pika.jpg' style='width: 50px; transform: scaleX(-1); display: block;'></center>
                        <progress id='file' max='100' value='" . $pika->getLifePoints() . "'></progress>
                        </td>
                        <td><center><a style='margin : 0px 100px'>".$pika->lastAttack."</a></center></td>
                        <td><center><img src='img/evil.png' style='width: 50px;transform: scaleX(-1); display: block;'></center>
                        <progress id='file' max='100' value='" . $evil->getLifePoints() . "'></progress>
                        </td>
                    </tr>
                    ";
                if ($evil->getLifePoints() > 0) {
                    $evil->attack($pika);
                    echo"
                    <tr>
                        <td><center><img src='img/evil.png' style='width: 50px; display: block;'></center>
                        <progress id='file' max='100' value='" . $evil->getLifePoints() . "'></progress>
                        </td>
                        <td><center><a style='margin : 0px 100px'>".$evil->lastAttack."</a></center></td>
                        <td><center><img src='img/pika.jpg' style='width: 50px; display: block;'></center>
                        <progress id='file' max='100' value='" . $pika->getLifePoints() . "'></progress>
                        </td>
                    </tr>
                    ";
                }
            }