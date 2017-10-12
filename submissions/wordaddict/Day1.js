const _ = require('lodash');
const yargs = require('yargs');

var argv = yargs.argv;

var guess = argv._[0];

var random = Math.random();

var no = Math.ceil(random * 100);

console.log(`The answer is ${no}`);

if (guess === no) {
  console.log('Correct!');
} else if (guess !== no) {
  if (guess < no) {
    console.log('Too low');
  } else if (guess > no) {
    console.log('Too high');
  }
  console.log('Try again');
}
