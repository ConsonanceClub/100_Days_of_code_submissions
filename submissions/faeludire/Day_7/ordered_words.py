# An ordered word is a word in which the letters appear in
# alphabetic order. Take the user input, and order the letters in the word or
# sentence alphabetically.

unordered_word = input('Enter the word you would like to oder: ')
ordered_word = ''.join(sorted(unordered_word))
print(ordered_word)
    