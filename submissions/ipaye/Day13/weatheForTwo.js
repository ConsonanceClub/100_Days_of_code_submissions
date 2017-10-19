function convertCelToFah(celsius) {
  let fahrenheit = null;
  fahrenheit = celsius * (9 / 5.0) + 32;
  return fahrenheit;
}

function convertFahToCell(fahrenheit) {
  let celcuius = null;
  celcuius = (fahrenheit - 32) * (5 / 9.0);
  return celcuius;
}

function main() {
  let result = null;
  let choice = prompt(`\n
  Enter 1 to convert from Celcius to Fah 🍠
  Enter 2 to Convert from Fah to Celcius 🎴`);

  if (isNaN(choice) && choice != 1 && choice != 2) {
    console.log('Enter A gaddamn Number bitch');
    return;
  }
  choice = parseInt(choice, 10);
  switch (choice) {
    case 1:
      let input = prompt(`\n\n⛅🌅Enter the number you want to convert from Celcius to Fah`);
      if (isNaN(input)) {
        console.log('Enter A gaddamn Number bitch');
      }
      result = convertCelToFah(input);
      console.log(`${input}celcius is ${result}fah`);
      return;
      break;
    case 2:
      let data = prompt(`\n\n ⛅🌅Enter the number you want to convert from Fah to Celcius`);
      if (isNaN(data)) {
        console.log('Enter A gaddamn Number bitch');
      }
      result = convertFahToCell(data);
      console.log(`${data}celcius is ${result}fah`);
      return;
      break;

    default:
      console.log('I tire for you');
      break;
  }
}

main();