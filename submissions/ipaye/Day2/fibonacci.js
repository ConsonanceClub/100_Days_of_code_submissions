//n! = n × (n−1)!
// Code for factorial 

function factorial(number){
  if(number == 0 || number == 1){
    return 1;
  }
  let answer = number;
  number --;
  answer *= factorial(number);

  return answer;
}

process.stdout.write('Enter a Number you want to find the factorial Of : ');
process.stdin.on('data', function(data) {  
  let answer = data.toString().trim();
  let entry = parseInt(answer);
  if(isNaN(entry)){
    console.error('\n Ops! Enter a Number \n'); 
    let message = `Please Try again
    `; 
    return message;
  };
  console.log(factorial(entry));
  process.exit();
})
