
def vowelCount(string):
    vowels = 'aeiou'

    if string == '':
        return 0
    elif string[0] in vowels:
        return 1 + vowelCount(string[1:])
    else:
        return vowelCount(string[1:])


userInput = input("Enter the string to count the vowels: ")

print(vowelCount(userInput))

print("move "[1:])
