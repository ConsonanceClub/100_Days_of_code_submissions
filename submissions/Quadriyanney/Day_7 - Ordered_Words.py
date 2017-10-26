from string import ascii_lowercase

string = raw_input("Enter a word(or sentence : ") #Collects input from user

print ''.join(sorted([i for i in string if i in ascii_lowercase])) #returns a string of ordered words