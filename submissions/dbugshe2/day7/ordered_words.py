'''
Day 7 -  Ordered words
an ordered word is a word in which the letters appear in alphabetic order
Take the user input and order the letters in the word or sentence alphabetically
'''

sentence =  input("Enter the word to be ordered in order to order the word >> ")
sentence =sentence.split(" ")
ordered_sentence = []
for word in sentence:
    new_word = list(word)
    new_word.sort()
    sorted_word = ''.join(new_word)
    ordered_sentence.append(sorted_word)
print(' '.join(ordered_sentence))