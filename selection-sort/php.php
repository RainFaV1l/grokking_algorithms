<?php

// Сортировка выбором

// Функция, которая возвращает индекс наименьшого значения
function findSmallest(array $array) : int
{
    $smallest = $array[0];
    $smallestIndex = 0;

    for ($i = 0; $i < count($array); $i++) {
        if($smallest > $array[$i]) {
            $smallest = $array[$i];
            $smallestIndex = $i;
        }
    }

    return $smallestIndex;
}

// Функция для сортировки выбором
function selectionSort(array $array) : array
{
    $sortedArray = [];
    for ($i = 0; count($array) > 0; $i--) {
        $smallestIndex = findSmallest($array);
        $sortedArray[] = array_splice($array, $smallestIndex, 1)[0];
    }
    return $sortedArray;
}

$numbers = [1, 24, -3, -66, 154];

echo 'Исходный массив';

echo '<pre>';
print_r($numbers);
echo '</pre>';

echo 'Отсортированный массив';

echo '<pre>';
    print_r(selectionSort($numbers));
echo '</pre>';