# Бинарный поиск со строками и числами в Python

# Формула - log2(n)

# Пример | Отгадаем число из списка от 1 до 10 | Данное число мы можем отгадать за (log2(10) ~ 3)

# Изначально:
# 7 - Загадали
# low = 0
# high = 9
# mid = (0 + 9) / 2 = 4

# Первая попытка
# 4 - ответ
# Ответ: Больше

# Действие:
# low = 4 + 1 = 5
# high = 9
# mid = (5 + 9) / 2 = 7

# Вторая попытка
# 7 - ответ
# Ответ: правильно

def binarySearch(array, item):

    low = 0

    high = len(array) - 1

    while low <= high:

        if(item == high):
            return high

        if(item == low):
            return low

        mid = (low + high) // 2

        guess = array[mid]

        if(guess == item):
            return mid
        
        if(guess > item):
            high = mid - 1
        else:
            low = mid + 1

    return None

array = list(range(1, 10))

array = list(['a', 'b', 'c', 'd', 'e', 'f'])

result = binarySearch(array, 'e')
        
print(array[result])
