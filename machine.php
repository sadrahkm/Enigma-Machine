<?php

if (isset($_POST['data'])) {
    $plain = $_POST['data'];

    $alphabet = "abcdefghijklmnopqrstuvwxyz";
//$plain = "hihi";
    $cypher = "";
    list($r1, $r2, $r3,$state) = explode("\n", file_get_contents('rotors.enigma'));
    function reflector($char)
    {
        global $alphabet;
        return $alphabet[strlen($alphabet) - strpos($alphabet, $char) - 1];
    }
    function rotate_rotors()
    {
        global $state, $r1, $r2, $r3;
        $r1 = substr($r1, 1) . $r1[0];
        if ($state % 26 == 0)
            $r2 = substr($r2, 1) . $r2[0];
        if ($state % (26 * 26) == 0)
            $r3 = substr($r3, 1) . $r3[0];
        file_put_contents('rotors.enigma', array_map(function ($element) {
            return $element . "\n";
        }, array($r1, $r2, $r3,$state)));
    }
    foreach (str_split($plain) as $value) {
        $state += 1;
        $c1 = $r1[strpos($alphabet, $value)];
        $c2 = $r2[strpos($alphabet, $c1)];
        $c3 = $r3[strpos($alphabet, $c2)];
        $reflected = reflector($c3);
        $c3 = $alphabet[strpos($r3, $reflected)];
        $c2 = $alphabet[strpos($r2, $c3)];
        $c1 = $alphabet[strpos($r1, $c2)];
        rotate_rotors();
        $cypher .= $c1;
    }
    echo $cypher;
}