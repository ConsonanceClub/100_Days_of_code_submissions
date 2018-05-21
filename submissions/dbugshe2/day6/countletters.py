'''
Day 6 - Count Letters in a speech
full disclosure I owe @abdulateef for this solution, thanks man 
'''
import string
from pathlib import Path

speech = Path("speech.txt").read_text()
alphabet_list = list(string.ascii_lowercase)
alphabet_count = [0]*26

for alphabet in alphabet_list:
    count = speech.count(alphabet)
    alphabet_count[i] = count
     i +=1 

j = 0
for i in alphabet_list:
    print('{} => {}').format(i, alphabet_count[j])
    j += 1