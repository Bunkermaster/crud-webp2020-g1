<?php
/**
 * Created by PhpStorm.
 * @author Yann Le Scouarnec <bunkermaster@gmail.com>
 * Date: 22/11/2017
 * Time: 15:46
 */
try {
    $conn = new PDO('mysql:host=localhost;dbname=demo-garage-lol', 'root', 'root');
} catch(PDOException $exception) {
    die("Arrrrrghhhh X_x");
}
