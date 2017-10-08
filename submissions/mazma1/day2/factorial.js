/**
 * Finds the factorial of a given number using the recursive method
 * 
 * @param {any} number 
 * @returns factorial of given number
 */
function factorial(number) {
  if (number == 1) {
    return (1);
  }
  return (number * factorial(number - 1));
}


/**
 * Finds the factorial of a given number using a forLoop
 * 
 * @param {any} number 
 * @returns factorial of given number
 */
function loopFactorial(number) {
  let factorial = 1;
  for (i = 1; i <= number; i++) {
    factorial *= i;
  }
  return factorial;
}

function findFactorial(input) {
  document.getElementById('factorial').innerHTML = factorial(input);
  return false;
}
