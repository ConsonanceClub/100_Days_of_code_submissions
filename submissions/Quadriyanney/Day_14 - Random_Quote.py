import random

qoutes  = ['qoute1', 'quote2', 'qoute3'] #List of quotes

random_id = random.randint(0, (len(qoutes)-1)) #Generates a random number within the range of the above list

print [quote for _id, quote in enumerate(qoutes) if random_id == _id][0] #return quote picked at random