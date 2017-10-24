'''
Day 5 - Count Vowels
Enter a string and the program counts the number of vowels in the text. 
For added complexity have it report a sum of each vowel found in a long text.
'''
def countVowels(word):
    word = word.lower()
    a_counter = word.count('a')
    e_counter = word.count('e')
    i_counter = word.count('i')
    o_counter = word.count('o')
    u_counter = word.count('u')

    #output formatting
    print("The number of vowels are as follows: \n a = %s \n e = %s \n i = %s \n o = %s \n u = %s" % (str(a_counter), str(e_counter), str(i_counter), str(o_counter), str(u_counter)))
        
new_word = input("Type something below, let's see how many vowels it has \n >> ")
countVowels(new_word)