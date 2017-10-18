import math
Vowels = ['a','e','i','o','u']
value = 0
KeyVal = [0,0,0,0,0]
#KeyVal= [[i, 0] for i in Vowels]
print("Please Enter any text of your choice");
data = input();
data= data.replace('\n', '').lower()
for i in data:
        if i in Vowels:
            continue
        else:
            data = data.replace(i, "")

value = len(data)
 
for i in data:
        index = Vowels.index(i)
        KeyVal[index] += 1



#print the amount of each vowel in the text
for i in Vowels:

     index = Vowels.index(i)
     
     print ("The count of " + i + " is " + str(KeyVal[index]));
    
     

