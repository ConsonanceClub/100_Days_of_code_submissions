/*
The function does the following:
 1. Runs the string through a regular expression that checks if it's an alphanumeric
 2. converts string to lower case
 3. split, reverse and join the string
 4. check if initial string equals reversed string
*/

function palindrome(str) {
  var reg = /[^0-9a-z]/gi;        // \W == [^0-9a-zA-Z_]
  var newStr = str.replace(reg, "").toLowerCase();
  var pali = newStr.split("").reverse().join("");
  if(pali === newStr){
    return true;
  }
  return false;
}
