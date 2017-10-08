/*
 Code in JavaScript (Node.js 8.6.0)
 RUN:    node Day1:GuessMyNumber.js
 */
const rl = require('readline-sync');
rl.setDefaultOptions({
    prompt: ':> '
});

function solution() {
    let random = parseInt((Math.random()*100) + 1);
    let msg, guess;
    guess = parseInt(rl.question('Guess a number? '));

    do {
        msg = (guess > random) ? `Your guess '${guess}' is High.\nTry again: `
            : (guess < random) ? `Your guess '${guess}' is Low.\nTry again: `
                : `Enter an integer`;
        console.log(msg);
        guess = parseInt((guess !== random) ? rl.prompt() : guess);
    } while (guess !== random);

    console.log(`You guessed right, '${guess}' was correct!!`);
}

solution();
