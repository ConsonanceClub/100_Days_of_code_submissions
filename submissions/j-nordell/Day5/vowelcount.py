vowel_dict = {'a': 0, 'e': 0, 'i': 0, 'o': 0, 'u': 0}
vowels = ['a', 'e', 'i', 'o', 'u']
user_text = input("Please enter some text:  ")
user_text = list(user_text.lower())

for letter in user_text:
  if letter in vowels:
    vowel_dict[letter] += 1
  
print("Here are the results: ")

for key, value in vowel_dict.items():
    print(key, value)
    
