onst _ = require('lodash');
const yargs = require('yargs');

var argv = yargs.argv;
var command = argv._[0];

console.log(`Your input is: ${command}`);

// Using RECURSION
function fact (num) {
  if (num === 0) {
    return 1
    console.log(1);
  } else {
    return num * fact (num - 1);
  }
}
console.log(`The factorial of ${command} = ${fact(command)}. (using RECURSION)`);

// Using LOOP
function factorial () {
  var y = 1;
  for (var i = command; i >= 1; i--) {
    y = y * i;
  }
  return y;
};
console.log(`The factorial of ${command} = ${factorial()}. (Using LOOP)`);
