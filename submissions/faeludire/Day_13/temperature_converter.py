# Day 13: Temperature converter
# Temperature converter - Program should convert temperature in degree Celsius to Fahrenheit and vice versa.

def c_to_f(temp):
    return (temp - 32) * 5/9

def f_to_c(temp):
    return (9/5) * temp + 32


print('\t***TEMPERATURE CONVERTER***')
print('\n1. Celsius to Fahrenheit\n2. Fahrenheit to Celsius.\n')

choice = int(input("Please enter your prefered conversion scheme:"))

temperature = float(input('Enter temperature: '))

if choice == 1:
    print("Temperature in Fahrenheit is " + str(round(c_to_f(temperature), 2)))
elif choice == 2:
    print("Temperature in Celsius is " + str(round(f_to_c(temperature), 2)))