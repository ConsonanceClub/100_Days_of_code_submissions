def get_input():
    user_input = input("Please enter a value: ")
    check_palindrome(user_input)


def check_palindrome(user_input):
    end_point = len(user_input)-1
    mid_point = int(len(user_input)/2)
    first_half = user_input[:mid_point]
    if len(user_input) % 2 == 1:
        other_half = user_input[end_point:mid_point:-1]
    else:
        other_half = user_input[end_point:mid_point-1:-1]
    if first_half == other_half:
        print("{} is a palindrome".format(user_input))
    else:
        print("Oops!!! {} is not a palindrome".format(user_input))

print("Palindrome checker!!!\n")
get_input()
