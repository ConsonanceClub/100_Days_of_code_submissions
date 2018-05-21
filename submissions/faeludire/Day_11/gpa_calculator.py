# GPA Calculator: Get the courses, units and scores from a user and determine the GPA
# using a 5 point grade system.

def grade_to_score(score):
    if score > 70 and score < 100:
        return 5
    elif score < 70 and score > 60:
        return 4
    elif score < 60 and score > 50:
        return 3
    elif score < 50 and score > 45:
        return 2
    elif score < 45 and score > 40:
        return 1
    elif score < 40 and score >= 0:
        return 0
    else:
        return 0


print ('************Simple Grade Point Average (GPA) Calculator*************')
try:
    number_of_courses = int(input('How many courses did you offer?: '))
except:
    print('Invalid input, please try again.')
tu = 0
tcp = 0

while number_of_courses > 0:
    try:
        course_units = int(input('Enter the course unit: '))
        course_score = int(input('Enter the course score: '))
        grade_point = grade_to_score(score = course_score)
        tcp += course_units * grade_point
        tu += course_units
        number_of_courses = number_of_courses - 1
    except:
        print('Ivalid input, please try again.')
print('Your GPA for the semester is ', round(tcp/tu, 2))