#Day 5: Count Vowels

#This program counts the number of vowels in the entered string.
#For added complexity, it reports a sum of each vowel found in a long text.

inputString = raw_input("Enter the string to be evaluated:")

lowerCaseString = str.lower(inputString)
convertedListString = list(lowerCaseString)
aNum = convertedListString.count('a')
eNum = convertedListString.count('e')
iNum = convertedListString.count('i')
oNum = convertedListString.count('o')
uNum = convertedListString.count('u')

totalVowelsFound = aNum + eNum + iNum + oNum + uNum

print "Total number of vowels are: ", totalVowelsFound
print "Total number of 'a' found = ", aNum
print "Total number of 'e' found = ", eNum
print "Total number of 'i' found = ", iNum
print "Total number of 'o' found = ", oNum
print "Total number of 'u' found = ", uNum
