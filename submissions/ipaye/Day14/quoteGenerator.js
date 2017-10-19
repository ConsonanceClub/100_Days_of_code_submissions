let quote = [{
    'quote': 'He who runs around looking for scissors to cut Indomie seasoning sachets is not yet hungry ',
    'author': 'Indomie'
  },
  {
    'quote': 'If i tell you say i love you, my money, my body na your own',
    'author': 'Davido'
  },
  {
    'quote': 'He who fully unwraps a Sharwama completely before eating it cannot keep a secret',
    'author': 'Anonymous'
  },
  {
    'quote': 'Whoever reads all these quotes without laughing is looking for a job',
    'author': 'Martin Luther King'
  },
  {
    'quote': 'if you no get money, Hide your face',
    'author': 'Small Doctor'
  },
  {
    'quote': 'Only ewa agonyin can understand the full plight of bread ',
    'author': 'Anonymous'
  },
  {
    'quote': 'Only a courageous woman can fry a bunch of plantain without tasting any',
    'author': 'Anonymous'
  },
  {
    'quote': 'Any man that uses his teeth to cut shaki from pepper-soup with his eyes wide open is not afraid of anything ',
    'author': 'Anonymous'
  },
  {
    'quote': 'Drinking garri does not mean you are poor, but allowing the garri to swell-up before drinking is Poverty',
    'author': 'Somebody Without Joy'
  }
]
let randomNumber = (Math.floor(Math.random()*quote.length));
console.log(`\nYour Quote is : "${quote[randomNumber].quote}". \nThe Quote is by : ${quote[randomNumber].author}`);

// console.log(randomNumber);
