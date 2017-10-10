const fs = require('fs');

var regexp = /[a-z]/gi;
let fileRead = fs.readFileSync('./farewell_speech.txt', 'utf-8');
let matchedWord = fileRead.toLowerCase().match(regexp); //finds words creating an array of the matched regex string
let wordsArray = Array.from(new Set(matchedWord)).sort(); //create an array of all  each letter found (a-z)

let results = [];
let printedString = '';
for(let i = 0; i < wordsArray.length; i++){
  let result = matchedWord.filter((value)=>{
    return value == wordsArray[i];
  })
  results.push(result.length);
  printedString += `\n Yo😎 ! I found ${results[i]} ${wordsArray[i]} in the sentence \n`
}
console.log(printedString);


