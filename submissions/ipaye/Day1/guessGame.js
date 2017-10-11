function generateRandomNumber(){
  let randomNumber = (Math.floor(Math.random()*100)+1);
  return randomNumber;
};

let no = generateRandomNumber();
console.log(no);


process.stdout.write('Enter A no between 1 and 100 : ');

process.stdin.on('data', function(data) {  
  let answer = data.toString().trim();
  let entry = parseInt(answer);
  if( no == entry){
    console.log('yipe!');
    process.exit();
  }else if(no > entry){
    console.log('Your guess is lower than What i have ', entry);
  }else if(no < entry){
    console.log('Your guess is Higher than What i have ', entry);
  }else if(no < entry){
    console.log('Your guess is Higher than What i have ', entry);
  }else if(no < entry){
    console.log('Your guess is Higher than What i have ', entry);
  }else if(isNaN(answer)){
    console.log('Enter a Number', answer);
  }
})
