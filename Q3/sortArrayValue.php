<?php



function sortAscArray($input){
    $uniqueArray = array();

    foreach ($input as $item) {
        if (in_array($item, $uniqueArray)){
            continue;
        }else{
            array_push($uniqueArray, $item);
        }
    }

    for ($i = 0; $i < count($uniqueArray); ++$i){
        for ($j = $i+1; $j < count($uniqueArray); ++$j){
            if ($uniqueArray[$i] > $uniqueArray[$j]){
                $temp = $uniqueArray[$i];
                $uniqueArray[$i] = $uniqueArray[$j];
                $uniqueArray[$j] = $temp;
            }
        }
    }
    print_r($uniqueArray);
}

$input = [-2, 12, 45, -9, 1, 5, 12, -2];
sortAscArray($input);





