<?php

/**
 * @param String $s
 * @return Boolean
 */
function isValid($s)
{
    $stack = [];
    $brackets = [
        ')' => '(',
        "}" => '{',
        "]" => '['
    ];

    for ($i = 0; $i < strlen($s); $i++) {
        $char = $s[$i];

        if (in_array($char, ['(', '[', '{'])) {
            array_push($stack, $char);
        } else {
            if (empty($stack) || $stack[count($stack) - 1] != $brackets[$char]) {
                return false;
            }
            array_pop($stack);
        }
    }
    return empty($stack);
}


$string = "()[]{}";

var_dump(isValid($string));
