process.stdout.write('Give me a word and i will count the vowels in it: ');
process.stdin.on('data', function(data) {
    var word = data.toString().trim();

    if (word) {
        console.log("You entered " + word);
        var countA = word.split("").filter(function(charac) {
            return charac == 'a';
        }).length;
        var countE = word.split("").filter(function(charac) {
            return charac == 'e';
        }).length;
        var countI = word.split("").filter(function(charac) {
            return charac == 'i';
        }).length;
        var countO = word.split("").filter(function(charac) {
            return charac == 'o';
        }).length;
        var countU = word.split("").filter(function(charac) {
            return charac == 'u';
        }).length;

        console.log("Result: \n a => " + countA + " \n e => " + countE + " \n i => " + countI + " \n o => " + countO + " \n u => " + countU);
        process.exit();
    } else {
        console.log("Abeg enter something");
    }
});