process.stdout.write('Let me help you reorder your words: ');
process.stdin.on('data', function(data) {
    var word = data.toString().trim().toLowerCase();

    if (word) {
            ordered = word.split("").sort().join("");
            console.log('The Sorted word is \n\n' + ordered);
            process.exit();
    } else {
        console.log("Abeg enter something");
    }
});