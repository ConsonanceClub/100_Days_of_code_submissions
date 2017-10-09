/**
 * 1. Search for special symbols and remove it
 * 2. convert to lowercase
 * 3. split the string to an array
 * 4. perform a reversr on the array then join.
 * 5. check if strings are equal;
 */

function palindrome(value) {
  let regexSearch = /[^a-zA-Z0-9]/g;
  let removeSpecialChar = value.replace(regexSearch, '').toLowerCase();
  //  return removeSpecialChar;
  let invertedString = removeSpecialChar.split('').reverse().join('');
  return value == invertedString;
}

process.stdout.write('\n\nEnter the word you wanna check the Palindrome-ness 😏 : ');
process.stdin.on('data', function (data) {
  let response = data.toString().trim();
  let status = palindrome(response);
  if (status == true) {
    console.log(`\nWow! we've got ourselves a palindrome`);
    process.exit();
  } else {
    console.log(`No Palindrom Found!😭. \nMans not Hot`);
     process.exit();
  }
});