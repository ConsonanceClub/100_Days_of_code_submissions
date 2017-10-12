# Check If Palindrome
# see if an given string is a palindrome,
# that is: can be spelt same way backwards like
# racecar, nursesrun and 7102017

text = input("enter a word.. ")

if text == text[::-1]:
    print(f"{text} is a palindrome")
else:
    print(f"{text} is not a palindrome")

# python has this cool trick of turning a given string
# inside out, backwards, just the way we want it.
