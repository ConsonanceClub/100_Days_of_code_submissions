function acceptNumberOfCourses() {
  let numberOfCourses = 0;

  numberOfCourses = prompt('Enter the number of courses you are taking : ');
  if (isNaN(numberOfCourses)) {
    console.log('Dont be Silly, Enter a number');
  }
  numberOfCourses = parseInt(numberOfCourses, 10);
  return numberOfCourses;
}

function acceptCourseUnitAndGrade(numCourses) {
  // let numCourses = acceptNumberOfCourses();
  // console.log(typeof nu);

  let i = 0,
    input = "",
    results = [];
  regex = /^[\w/(A|B|C|D|E)/0-9]$/;

  while (i < numCourses) {
    i++;
    input = prompt(`
    Enter Course-Name/Grade/courseunit
    ! Grade Ranges allowed : A | B | C | D | E | F

    Using the format:
    CourseName in string, 
    grade in string, 
    courseunit in numbers.

    Example input : EEG304/B/3
    `);
    input = input.split("/");
    results.push({
      courseName: input[0].trim(),
      grade: input[1].trim(),
      courseUnit: parseInt(input[2], 10)
    });
  }
  return results;
}

function calculateSGPA(results) {
  let finalPoint = null;
  let totalUnit = 0;
  let tempScore = 0;
  let CourseUnitCalc = null;

  for (let i = 0; i < results.length; i++) {
    switch (results[i].grade.toLowerCase()) {
      case 'a':
        CourseUnitCalc = (5 * results[i].courseUnit);
        tempScore += CourseUnitCalc;
        totalUnit += results[i].courseUnit;
        break;
      case 'b':
        CourseUnitCalc = (4 * results[i].courseUnit);
        tempScore += CourseUnitCalc;
        totalUnit += results[i].courseUnit;
        break;
      case 'c':
        CourseUnitCalc = (3 * results[i].courseUnit);
        tempScore += CourseUnitCalc;
        totalUnit += results[i].courseUnit;
        break;
      case 'd':
        CourseUnitCalc = (2 * results[i].courseUnit);
        tempScore += CourseUnitCalc;
        totalUnit += results[i].courseUnit;
        break;
      case 'e':
        CourseUnitCalc = (1 * results[i].courseUnit);
        tempScore += CourseUnitCalc;
        totalUnit += results[i].courseUnit;
        break;
      case 'f':
        CourseUnitCalc = (0 * results[i].courseUnit);
        tempScore += CourseUnitCalc;
        totalUnit += results[i].courseUnit;
        break;

      default:
        console.log('invalid Grade Type');
        break;
    }
  }
  console.log(tempScore, totalUnit);

  finalPoint = tempScore / totalUnit;
  return finalPoint;

}

function main() {
  try {
    let numOfCourses = acceptNumberOfCourses();
    if(isNaN(numOfCourses)){
      alert('You didnt Enter a Number');
      return;
    }
    let results = acceptCourseUnitAndGrade(numOfCourses);
    let sgpa = calculateSGPA(results);
    sgpa.toFixed(2);
    console.log(`Your SPA or Semester GP is ${sgpa} Point`);
  }catch(err){
    console.err('please fill the The feilds corectly');
  }
};

main();