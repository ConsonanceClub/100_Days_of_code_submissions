/*
 Code in JavaScript (Node.js 8.6.0)
 RUN:    node Day4:CheckIfPalindrome.js
 */

const rl = require('readline-sync');
rl.setDefaultOptions({
    prompt: ':> '
});

let str = rl.question('Check if string is palindrome? ');

function solution(str) {
    // str is the string entered by a user
    str.trim();
    let len = str.length;
    let left = str.substr(0, Math.floor(len/2));
    let right = str.substr(Math.ceil(len/2), len).split('').reverse().join('');
    return (left===right);
}

console.log(solution(str));