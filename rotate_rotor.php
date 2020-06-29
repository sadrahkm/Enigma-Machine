<?php


$alphabet = "abcdefghijklmnopqrstuvwxyz";

$r1 = str_shuffle($alphabet);
$r2 = str_shuffle($alphabet);
$r3 = str_shuffle($alphabet);
echo $r1 . "<br>";
echo $r2 . "<br>";
echo $r3 . "<br>";

file_put_contents('rotors.enigma', array_map(function ($element) {
    return $element . "\n";
}, array($r1, $r2, $r3,0)));
