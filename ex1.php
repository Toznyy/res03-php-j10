<?php
///////////////////////////// Exercice 1 //////////////////////////////////

function getRandomNumbersArray() : array {
    $nbTab = range(-12000, 12000);
    shuffle($nbTab);
    return $nbTab;
}

function trierTabCroissant($numbers) {
    $count = count($numbers);
    for ($i = 0; $i < $count; $i++) {
        for ($j = 0; $j < $count - $i - 1; $j++) {
            if ($numbers[$j] > $numbers[$j+1]) {
                $temp = $numbers[$j];
                $numbers[$j] = $numbers[$j+1];
                $numbers[$j+1] = $temp;
            }
        }
    }
    return $numbers;
}

function trierTabDecroissant($numbers) {
    $count = count($numbers);
    for ($i = 0; $i < $count; $i++) {
        for ($j = 0; $j < $count - $i - 1; $j++) {
            if ($numbers[$j] < $numbers[$j+1]) {
                $temp = $numbers[$j];
                $numbers[$j] = $numbers[$j+1];
                $numbers[$j+1] = $temp;
            }
        }
    }
    return $numbers;
}


function sortNumbers(array $numbers, bool $desc = false) : array {
    if($desc === false) {
        return trierTabCroissant($numbers);
    }
    else {
        return trierTabDecroissant($numbers);
    }
}

$numbers = getRandomNumbersArray();
$sortedNumbers = sortNumbers($numbers, false);
var_dump($sortedNumbers);

?>