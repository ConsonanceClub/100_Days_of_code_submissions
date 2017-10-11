process.stdout.write('Send any word to check if its palindrome: ');
process.stdin.on('data', function(data) {
    var word = data.toString().trim();

    if (word) {
        console.log("You entered " + word);
        var paliWord = getPalindrome(word);
        if (word == paliWord) {
            console.log("Oga, the word na palindrome o");
        } else {
            console.log("The word " + word + " is not palindrome");
        }

        process.exit();
    } else {
        console.log("Abeg enter something");
    }
});

function getPalindrome(val) {
    var arrayVal = val.split("");

    var reverseArray = arrayVal.reverse();

    var newWord = reverseArray.join("");

    return newWord;
}