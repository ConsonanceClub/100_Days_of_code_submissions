
vowel = ['a','e','i','o','u']
vowelPos = [0,0,0,0,0]

word = input('Enter a word :')
word_list = list(word)
i = 0
for letter in vowel :
    count = word_list.count(letter)
    vowelPos[i] = count
    i +=1 

totalVowels =0
for c in vowelPos:
    totalVowels = totalVowels+c


print('you have a total of {} vowels'.format(totalVowels))
print("{} has {} a(s) {} e(s) {} i(s) {} o(s) {} u(s) ".format(word,vowelPos[0],vowelPos[1],vowelPos[2],vowelPos[3],vowelPos[4]))