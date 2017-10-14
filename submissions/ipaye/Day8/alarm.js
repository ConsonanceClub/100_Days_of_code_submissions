const exec = require("child_process").exec;

function Alarm(value) {
  var stringNumber = value;
  // console.log(stringNumber);
  var toNumber = Number(stringNumber);
  var waitTime = toNumber * 60 *1000; 
  console.log(`\nWe would Start the timer now \n`);
  
  setTimeout(function() {
    clearInterval(interval);
    exec('ls');
    console.log(`\nBOOM! BOOM!! BOOM!!! get to work lazy ass\n`);
    
    console.log(`\n We have waited for ${toNumber} Minute`);
    
    process.exit();
  }, waitTime);


  var currentTime = 0;
  var waitInterval = 1000;
  var secondTime = 0;

  function writeWaitingTime(currentTime, secondParam = 0) {
    process.stdout.clearLine();
    process.stdout.cursorTo(0);
    var seconds = currentTime / 1000;

    if (seconds <= 60) {
      process.stdout.write(`waiting for ${seconds} seconds`)
    } else {
      var minute = Math.floor(seconds / 60);
      var newSeconds = seconds % 60;
      process.stdout.write(`Waiting for ${minute} minute and ${newSeconds} seconds`);
    }
  }
  if(currentTime === waitTime){
    console.log(currentTime, waitTime);
    process.exit();
  }

  var interval = setInterval(function () {
    currentTime += waitInterval;    
    writeWaitingTime(currentTime);
  }, waitInterval);
}


process.stdout.write(`\n\nEnter the no of minutes(In Numbers) you want the alarm to sound by 🦄 : `);
process.stdin.on('data', function (data) {
  let response = data.toString().trim();
  if(isNaN(response)){
    console.log('Dont be Silly, Enter a number');
    process.exit();
  }
  Alarm(response);
});