import string
from pathlib import Path

word = Path('obama.txt').read_text()
alphabet_list = list(string.ascii_lowercase)
alphabet_count = [0]*26

# word = input('Enter your word : ')
i = 0
for alphabet in alphabet_list:
    count = word.count(alphabet)
    alphabet_count[i] = count
    i += 1
j =0
for i in alphabet_list:
    print ('{} => {}'.format(i,alphabet_count[j]))
    j += 1
