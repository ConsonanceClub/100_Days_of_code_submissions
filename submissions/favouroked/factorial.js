var number;
var factorial;
function find_factorial(x){
  if (number > 1){
    x *= number;
    number -= 1;
    return find_factorial(x);
  } else {
    return x;
  }
}

function factorial(value, func){
  number = value-1;
  fact = func(value);
  return fact;
}

console.log(factorial(150, find_factorial));
