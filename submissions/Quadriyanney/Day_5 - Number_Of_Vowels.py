import re

string = raw_input("Enter a string : ") #Collects input from user

list_of_vowels = ['a', 'e', 'i', 'o', 'u']
list_of_vowels_in_string = []

for vowel in list_of_vowels:

	pattern = re.compile(vowel) #Creates a regex pattern
	temp_list = pattern.findall(string.lower()) #Generates a list for the existence of a particular vowel
	
	print vowel + " :", len(temp_list)
	
	list_of_vowels_in_string.extend(temp_list) #Adds all the generated list together

print "Total :", len(list_of_vowels_in_string)