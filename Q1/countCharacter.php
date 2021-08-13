<?php
function countCharacter($string)
{
    $charArray = str_split($string);

    return array_count_values($charArray);
}

$string = 'CLeeeEEMMMss';

print_r(countCharacter($string));
