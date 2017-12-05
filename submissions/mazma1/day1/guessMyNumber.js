function guessMyNumber() {
  let randomNumber = Math.floor(Math.random() * 10);
  let score = parseInt(localStorage.getItem('score'));
  let myGuess = parseInt(document.getElementById("userInput").value);

  if (myGuess > 9 || myGuess < 0) {
    alert('You must pick a number between 0 and 9');
    return false;
  }

  if (myGuess > randomNumber) {
    alert('You are too high, try again!')
    return false;
  }

  if (myGuess < randomNumber) {
    alert('You are too low, try again!')
    return false;
  }

  if (randomNumber === myGuess) {
    if (score) {
      score += 1;
      localStorage.setItem('score', score);
      alert(`You win!! You have ${score} WINS`)
      return false;
    } else {
      score = 1
      localStorage.setItem('score', score);
      alert(`You win!! You have ${score} WIN`)
      return false;
    }
    return false;
  }
}

function clearStorage() {
  localStorage.removeItem('score');
}
