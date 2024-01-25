<?php

/**
 * @param String $s
 * @param String $t
 * @return Boolean
 */
function isAnagram($s, $t)
{
    if (strlen($t) != strlen($s)) return false;
    foreach (str_split($s) as $sexo => $sex) {
        //echo $sex . PHP_EOL;
        if (str_contains($sex, $t)) return false;
    }
    return true;
}

$s = "sexo";
$t = "xeso";
var_dump(isAnagram($s, $t));
