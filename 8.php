<?php
function increaseEnthusiasm($anyString): string {
    return $anyString . "!";
}

echo increaseEnthusiasm("My string") . "\n";

function repeatThreeTimes($anyString): string {
    return $anyString . $anyString . $anyString;
}

echo repeatThreeTimes("New string") . "\n";

echo increaseEnthusiasm(repeatThreeTimes("I love PHP")) . "\n";

function cut($anyString, $length = 10): string {
    return substr($anyString, 0, $length);
}

echo cut("adajgjak") . "\n";

function printArrayRecursively($arr, $index = 0) {
    if ($index < count($arr)) { 
        echo $arr[$index] . " "; 
        printArrayRecursively($arr, $index + 1);
    }
}

$arr = [1, 2, 3, 4, 5];
printArrayRecursively($arr);

echo "\n";

function sumDigitsRecursively($num) {
    if ($num <= 9) {
        return $num;
    }

    return sumDigitsRecursively(array_sum(str_split($num)));
}

echo sumDigitsRecursively(987); 
echo "\n";
echo sumDigitsRecursively(12345); 