// Функция, которая возвращает индекс наименьшого значения
function findSmallest(array)
{
    let smallest = array[0];
    let smallestIndex = 0;

    for (let i = 0; i < array.length; i++) {
        if(smallest > array[i]) {
            smallest = array[i];
            smallestIndex = i;
        }
    }

    return smallestIndex;
}

// Функция для сортировки выбором
function selectionSort(array)
{
    const sortedArray = [];
    for (let i = 0; array.length > 0; i--) {
        let smallestIndex = findSmallest(array);
        sortedArray.push(array.splice(smallestIndex, 1)[0]);
    }
    return sortedArray;
}

const numbers = [1, 24, -3, -66, 154];

console.log(selectionSort(numbers));