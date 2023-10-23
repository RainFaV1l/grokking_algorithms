<?php

// Бинарный поиск со строками и числами в php

function binarySearch(array $array, mixed $value) : int | bool {

    $low = 0;

    $high = count($array) - 1;

    while($low <= $high) {

        $mid = floor(($low + $high) / 2);

        $guess = $array[$mid];

        if(is_numeric($value)) {

            if($guess === $value) {
                return $mid;
            }
    
            if($guess > $value) {
                $high = $mid - 1;
            }
    
            else {
                $low = $mid + 1;
            }

        } else {

            if(strcmp($guess, $value) === 0) {
                return $mid;
            }
    
            if(strcmp($guess, $value) > 0) {
                $high = $mid - 1;
            }
    
            else {
                $low = $mid + 1;
            }

        }



    }

    return false;

}

//$array = range(0, 100);

$array = ['apple', 'banana', 'cherry', 'lemon', 'orange', 'strawberry'];

$value = 'lemon';

$result = binarySearch($array, $value);

echo $array[$result];