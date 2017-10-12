function matchAndReplace(param){
  let regexp = /[\W|0-9]/gi;
  let words = param.replace(regexp, '');
  return words;
}

function sortWords(value) {
  let words = value.split(' ');
  let result = '';
  words.forEach(function (word) {
    word = word.toLowerCase();
    let data = matchAndReplace(word);
    result += `${data.split('').sort().join('')} `;
  });
  return result;
}

process.stdout.write(`\n\nEnter a Word or Sentence and I'd Magically Sort it 🦄 : `);
process.stdin.on('data', function (data) {
  let response = data.toString().trim();
  let status = sortWords(response);
  console.log(status);
  process.exit(); 
});