const request = require('request');

const options = {
  url: 'http://api.icndb.com/jokes/random',
  method: 'GET',
  json: true
}

request(options, function (error, response, body) {
  if (!error && response.statusCode == 200) {
    // process.stdout.write(`${body}`);
    // console.log(JSON.stringify(body, undefined, 2));
    let chucks = decodeURIComponent(body.value.joke);
    console.log('A random Chuck Norris quote is :', chucks);
  } else {
    console.log('Unable to connect to the server');

  }
})