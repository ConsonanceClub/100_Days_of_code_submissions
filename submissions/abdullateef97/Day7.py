word = input("Enter a string to be ordered : ")
wordList = list(word.lower());
wordList.sort()

joinWord = ''.join(wordList)
print("ordered word is "+joinWord)

