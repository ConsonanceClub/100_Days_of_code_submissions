# This program checks if a word is Palindrome i.e if it reads the same forward and backward
a = raw_input("Enter the String: ")
b = list(a)
z = ''
for i in range(len(b)):
    y = b.pop()
    z += y
if a == z:
    print "This word is a palindrome"
else:
    print "This word is not a palindrome"
