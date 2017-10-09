process.stdin.resume();
process.stdin.setEncoding('utf8');
var util = require('util');
var randomNumber =  Math.floor(Math.random() * 100);
process.stdin.on('data', function (text) {
  // console.log('received data:', util.inspect(text));
  if (text == randomNumber) {
    done();
  } else if (text > randomNumber) {
    console.log('You number is greater')
  } else {
    console.log("Your number is less")
  }
});

function done() {
  console.log("You got the number");
  console.log('Now the game will exit, come back another time.');
  process.exit();
}
