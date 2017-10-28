#Day 6: Count Letters in a Speech

#This program reads content from the file, which contains the farewell speech of Barack Obama
# and counts and records all letters of the alphabet present
#The output is in the form a: 20, b: 10, ...z: 5.
#Is is not case sensistive i.e 'a' == 'A'.
#Link for the text file => http://bit.ly/2yB3keV


from collections import Counter

file = open('farewell_speech_Obama.txt', 'r')
speech = file.read()
file.close()

lowerCaseVersion = str.lower(speech)
print(lowerCaseVersion)
convertedListString = list(lowerCaseVersion)
