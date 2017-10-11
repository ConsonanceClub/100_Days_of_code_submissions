process.stdout.write('Are you sure you want me do a letter count on Obama\'s speech (yes/y): ');
process.stdin.on('data', function(data) {
    var word = data.toString().trim();

    if (word) {
        if(word == "yes" || word == "y"){
            var fs = require('fs');
            var readStream = fs.readFileSync(__dirname + '/speech.txt', 'utf8');
            var alpha = 'abcdefghijklmnopqrstuvwxyz'.split('');
            var result = '';

            speech = readStream.toLowerCase().replace(/[^a-z]/gi, '').split("").sort().join("");

            alpha.forEach(function(letter){
                speechlength = speech.length;
                letterLastIndex = speech.lastIndexOf(letter);
                speech = speech.substr(letterLastIndex + 1);
                if(speechlength > 0){
                    result += letter +" => "+ (speechlength - speech.length) +"\n";
                }
            });

            console.log(result);
            process.exit();
        } else {            
            console.log("You are not replying with yes or y");
        }
    } else {
        console.log("Abeg enter something");
    }
});