#Day 4: Check if Palindrome

#This program checks if a string entered by a user is a palindrome.
#That is that it reads the same fowards, as well as backwards.
#Like the word "racecar" or "7102017"

def is_palindrome(text):
    n = len(text)
    for i in range(len(text) // 2):
        if text[i] != text[n-i-1]:
            return False
    return True

print("Enter string to check:")
enteredString = raw_input()

if (is_palindrome(enteredString)):
    print("The entered string is a palindrome")
else:
    print("The entered string is not a palindrome")
