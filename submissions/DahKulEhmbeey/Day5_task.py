vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U']


def get_input():
    user_input = input("Please enter a value: ").split()
    if len(user_input) != 1:
        arg_passer(user_input)
    else:
        print(count_vowels(user_input))


def count_vowels(user_input):
    global vowels
    count = 0
    for char in vowels:
        try:
            count += list(str(user_input)).count(char)
        except ValueError:
            pass
    return count


def arg_passer(input_list):
    count = 0
    for word in input_list:
        print("There is/are {} vowel(s) in {}".format(count_vowels(word), word))
        count += count_vowels(word)
    print("\nAnd there are {} vowels in all".format(count))

get_input()
