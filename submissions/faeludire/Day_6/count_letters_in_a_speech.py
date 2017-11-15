#Day 6: Count Letters in a Speech

#This program reads content from the file, which contains the farewell speech of Barack Obama
# and counts and records all letters of the alphabet present
#The output is in the form a: 20, b: 10, ...z: 5.
#Is is not case sensistive i.e 'a' == 'A'.
#Link for the text file => http://bit.ly/2yB3keV

def count_char(text, char):
    count = 0
    for c in text:
        if c == char:
            count = count + 1
    return count

with open('speech_Obama.txt') as speech:
    text = speech.read()

for char in 'abcdefghijklmnopqrstuvwxyz':
    char_count = count_char(text, char)
    print("{0} : {1}".format(char, char_count))