string = raw_input("Enter a string : ") #Takes input from user

if string == string[::-1]: #Check if string is the same from back
	print "It's a palindrome"
else:
	print "Not a palindrome"