/**
 * 1. create a regular expression string to search for the vowels
 * 2. check from the matches the no of occurence of each vowel 
 * 3. return the total no of each vowel if it exits.
 */

function stringSearch(value) {
  let state = false;
  let regexSearch = /(a|e|i|o|u)/gi;
  let matches = value.toLowerCase().match(regexSearch);
  let values = {
    'a': 0,
    'e': 0,
    'i': 0,
    'o': 0,
    'u': 0
  }

  if (matches) {
    state = true;
    matches.forEach(function (x) {
      switch (x) {
        case 'a':
          values.a++;
          break;
        case 'e':
          values.e++;
          break;
        case 'i':
          values.i++;
          break;
        case 'o':
          values.o++;
          break;
        case 'u':
          values.u++;
          break;
        default:
          console.log('No value found');
      }
    })
  }

 return state ? values : "no vowel found";
}
// console.log(stringSearch('hello'));


process.stdout.write(`\n\nEnter the sentence and I'd Magically find a vowel 🦄 : `);
process.stdin.on('data', function (data) {
  let response = data.toString().trim();
  let status = stringSearch(response);
  console.log(`\n Wow! I found 
  ${status.a} A's
  ${status.e} E's
  ${status.i} I's
  ${status.o} O's
  ${status.u} U's
  `); 
  process.exit(); 
});