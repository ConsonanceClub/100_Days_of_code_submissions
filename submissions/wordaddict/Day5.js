const yargs = require('yargs');
const _ = require('lodash');

var argv = yargs.argv;

var check = argv._[0];

function getVowels(str) {
  var check = str.match(/[aeiou]/gi);
  if(check) {
        noOfVowels = check.length;
        arr = check.sort().join('');
        let k=1;
        for(let i=0; i<noOfVowels; i+=k) {
            k = arr.match(new RegExp('['+arr[i]+']', 'gi')).length;
            console.log(`Vowel ${arr[i]} appeared ${k}\n`);
        }
    }
  return check === null ? 0 : check.length;
};

console.log(`The total number of vowels is: ${getVowels(check)}`);
