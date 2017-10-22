'''
Day 4 - Check if palindrome
Check if a string entered by a user is  a palindrome
'''
def checkPalindrome(word):
    '''
    change the input to a list reverse it in place and compare with the original
    '''
    word = word.split() #convert word to a list so it can be reversed and compared
    reversed_word = word
    reversed_word.reverse()
    result = "Cool, it IS a palindrome" if reversed_word == word else "Sorry NOT a palindrome"
    return result

string = input("enter a strig and let's see if it's a palindrome >> ")
print(checkPalindrome(string))
