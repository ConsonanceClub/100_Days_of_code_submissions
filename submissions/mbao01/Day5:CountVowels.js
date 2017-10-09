/*
 Code in JavaScript (Node.js 8.6.0)
 RUN:    node Day5:CheckVowels.js
 */

const rl = require('readline-sync');

console.log('\t\tVOWEL REPORTER');
let str = rl.question('Check how many you have in there\n>> ');
let report = '';
function solution(str) {
    // str is the string entered by a user
    let arr = str.toLowerCase().match(/[aeiou]/ig);
    let noOfVowels;
    if(arr) {
        noOfVowels = arr.length;
        arr = arr.sort().join('');
        let k=1;
        for(let i=0; i<noOfVowels; i+=k) {
            k = arr.match(new RegExp('['+arr[i]+']', 'gi')).length;
            report += `Vowel ${arr[i]} appeared ${k}\n`;
        }
    }
    return (noOfVowels) ? `${noOfVowels} vowel${(noOfVowels > 1) ? 's' : ''}` : 'no';
}

console.log(`You have ${solution(str)} in your sentence!\n\n-----------REPORT------------`);
console.log(report);
