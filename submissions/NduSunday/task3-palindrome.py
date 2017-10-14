

def palindrome(word):
    reverse = word[::-1]
    return reverse
def checkPalindrome(word):
    reverse = palindrome(word)
    word == word.capitalize()
    if (reverse == word):
        print("Your Entry is a palindrome ")
    else:
        print("Your entry is not a palindrome")

userWord = input("Enter the word to check: ")
checkPalindrome(userWord)


