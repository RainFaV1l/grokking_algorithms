// Бинарный поиск со строками и числами в JavaScript

const binarySearch = (array, value) => {

    let low = 0;
    let high = array.length - 1;

    while (low <= high) {

        const mid = Math.floor((low + high) / 2);

        const guess = array[mid]

        if(guess === value) {
            return mid;
        }

        if(guess > value) {
            high = mid - 1;
        } else {
            low = mid + 1;
        }

    }

    return false;

}

// const array = ['apple', 'banana', 'cherry', 'lemon', 'orange', 'strawberry'];

const array = Array.from({length: 100}, (_, index) => index + 1);

const value = 'lemon';

// const value = 87;

const result = binarySearch(array, value);

console.log(array[result]);