# Day 14: Random Quote Machine
# Random Quote Machine - Program should print out quotes that have been stored randomly. 
# You don't need to use any API. Store some quotes in your program,
# and print one at random each time the program executes.

import random

quotes = {
    0: {  
        'quote': "Strive not to be a success, but rather to be of value.",
        'author': "Albert Einstein",
    },
    1: {
        'quote': "Two roads diverged in a wood, and I—I took the one less traveled by, \
        And that has made all the difference.",
        'author': "Robert Frost",
    },
    2: {
        'quote': "I attribute my success to this: I never gave or took any excuse.",
        'author': "Florence Nightingale",
    },
    3: {
        'quote': "You miss 100% of the shots you don’t take.",
        'author': "Wayne Gretzky",
    },
    4: {
        'quote': "The most difficult thing is the decision to act, the rest is merely tenacity.",
        'author': "Amelia Earhart",
    },
    5: {
        'quote': "Every strike brings me closer to the next home run.",
        'author': "Babe Ruth",
    },
}

random_number = random.randint(0,6)
quote = quotes[random_number]['quote']
author = quotes[random_number]['author']
print(quote)
print(author)