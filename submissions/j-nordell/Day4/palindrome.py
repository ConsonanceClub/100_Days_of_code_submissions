user_text = input("Please enter some text: ")

user_text = "".join(user_text.split()).lower()
reverse_text = user_text[::-1]

print("{} in reverse is {}".format(user_text, reverse_text))

if(user_text == reverse_text):
  print("Your string is a palindrome.")
else:
  print("Your string is NOT a palindrome.")
