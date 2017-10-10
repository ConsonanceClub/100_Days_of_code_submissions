var secret = Math.floor(Math.random() * 20);
console.log("The computer secret score is " + secret);
process.stdout.write('Guess the number: ');
process.stdin.on('data', function(data) {
    var guess = parseInt(data.toString().trim());

    if (isNaN(guess)) {
        console.log("Boy common, enter a number");
    } else {
        if (guess == secret) {
            console.log("You got it write");
        } else {
            getanswer(guess);
        }
        process.exit();
    }

});

function getanswer(num) {
    var toTest = Math.abs(secret - num);

    if (toTest < 5) {
        return "Your answer is close";
    } else {
        return "Your answer is too far from the computer guess answer";
    }
}