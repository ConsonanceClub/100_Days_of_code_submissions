const process = require('process');

process.stdout.write(`\nHow many Word Passwords Do you want to generate \nEntered value must be greater than 6 : `)
process.stdin.on('data', function (data) {
  let response = data.toString().trim();
  response = parseInt(response, 10);
  if (isNaN(response) || response <= 6) {
    console.log(`\nEnter a Number thats grater than 6 \n`);
    process.exit();
  };
  let char = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz!@#$%^&*()';
  let hashPassword = '';
  for(let i = 0; i < response; i++){
    hashPassword += char[(Math.floor((Math.random() * (char.length - 2) + 1)))];
  }
  console.log(`Your Password is : `, hashPassword);
  process.exit();
})