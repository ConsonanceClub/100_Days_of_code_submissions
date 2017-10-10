const yargs = require('yargs');
const _ = require('lodash');

var argv = yargs.argv;

var check = argv._[0]


function palindrome(str) {
  var match = /[\W_]/;

  var lowerCase = str.toLowerCase().replace(match, '');

  var checkPalindrome = lowerCase.split('').reverse().join('');

  if (lowerCase === checkPalindrome) {
    console.log('It is a palindrome');
    console.log(checkPalindrome);
  } else {
    console.log('It is a not a palindrome!');
  }
};

palindrome(check);
