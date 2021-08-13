<?php

function sortArray($input)
{
$removeDuplicate = array_unique($input);

$positiveValue = array_filter($removeDuplicate, function ($x){return $x>0;});
$negativeValue = array_filter($removeDuplicate, function ($x){return $x<0;});

sort($positiveValue);
sort($negativeValue);

return array_merge($negativeValue, $positiveValue);
}

$input = [-2, 12, 45, -9, 1, 5, 12, -2];
print_r(sortArray($input));





