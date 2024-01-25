<?php

/**
 * @param String $s
 * @param String $t
 * @return Boolean
 */
function isAnagram($s, $t)
{
    if (strlen($t) != strlen($s)) return false;
    $sF = array_count_values(str_split($s));
    $tF = array_count_values(str_split($t));

    return  $sF == $tF;
}

$s = "sexo";
$t = "xeso";
var_dump(isAnagram($s, $t));
