def reverse(text):
    return text[::-1]

def isPalindrome(text):
    lower_text = text.lower()
    return lower_text == reverse(lower_text)


text = input("Enter a string : ")
if(isPalindrome(text)):
    print('good!, {} is a palindrome'.format(text))
else:
     print(' {} is not a palindrome'.format(text))