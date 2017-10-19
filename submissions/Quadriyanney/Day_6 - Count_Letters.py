import re
from string import ascii_lowercase #A string of all alphabets of the English Alphabet

_string = ""
list_of_present_alphabets = []
file = open('farewell.txt')

while True:
	line = file.readline() #Read each line from file

	if len(line) == 0: #Check if End Of Line
		break

	_string += line #Add each line to _string

for alphabet in ascii_lowercase:

	pattern = re.compile(alphabet) #Creates a regex pattern for each alphabet
	temp_list = pattern.findall(_string.lower()) #Generates a list for the existence of each alphabet in _string
	
	print alphabet + " :", len(temp_list)
	
	list_of_present_alphabets.extend(temp_list) #Adds list of all alphabet together

print "Total :", len(list_of_present_alphabets)