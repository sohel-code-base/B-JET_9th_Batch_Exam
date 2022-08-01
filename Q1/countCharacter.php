<?php
$string = "CLeeeEEMMMss";
function charCount($string){
    $charArray = str_split($string);
    $charWithNumber = array();
    foreach ($charArray as $char) {
        if (array_key_exists($char, $charWithNumber)){
            $charWithNumber[$char]++;
        }else{
            $charWithNumber[$char] = 1;
        }
    }
    $stringWithCharNumber = '';
    foreach ($charWithNumber as $char => $number) {
        $stringWithCharNumber .= $char.$number;

    }
    echo $stringWithCharNumber;
    /*    echo '<pre>';
        var_dump($stringWithCharNumber);*/
}
charCount($string);
