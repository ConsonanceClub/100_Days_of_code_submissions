/*
 Code in JavaScript (Node.js 8.6.0)
 RUN:    node Day6:CountLettersInASpeech.js
 */

const fs = require('fs');

console.log('\t\tVOWEL REPORTER');

let str = fs.readFileSync('./resources/obama.txt', 'utf8');
let report = '';

function solution(str) {
    // str is the string entered by a user
    let arr = str.toLowerCase().match(/[a-z]/ig);
    let noOfVowels;
    if(arr) {
        noOfVowels = arr.length;
        arr = arr.sort().join('');
        let k=1;
        for(let i=0; i<noOfVowels; i+=k) {
            k = arr.match(new RegExp('['+arr[i]+']', 'gi')).length;
            report += `There ${(k > 1) ? 'are' : 'is'} ${k} '${arr[i]}' in the speech\n`;
        }
    }
    return (noOfVowels) ? `${noOfVowels} character${(noOfVowels > 1) ? 's' : ''}` : 'no character';
}

console.log(`You have ${solution(str)} in your sentence!\n\n-----------REPORT------------`);
console.log(report);
