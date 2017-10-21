const process = require('process');
const fs = require('fs');

function main() {
  process.stdout.write(`\n
  ----------------------------------------------------------------------------

  Welcome to the Phonebook Application.Follow the instructions below to store in Details

  Enter Your Contact information in this sequence
  FullName-phoneNumber-Address.

  Example 
  Please Enter in Your Details : Ipaye Alameen - 08088884650 - Ikoyi, lagos state \n
  -----------------------------------------------------------------------------

  Please Enter in Your Details : `);

  process.stdin.on('data', function (data) {
    let response = data.toString().trim();
    let status = AddToPhoneBook(response);   
    console.log('You Added => ', status);
    process.exit();
  });
}

function AddToPhoneBook(details) {
  let info = details.split('-');
  let addressDetails = [];
  info.forEach(function (element) {
    let detail = element.trim();
    addressDetails.push(detail);
  });

  let contactInfo = `
Name : ${addressDetails[0]}
PhoneNumber : ${addressDetails[1]}
Address : ${addressDetails[2]}
  `;
  fs.appendFileSync('phoneBook.txt', contactInfo, 'utf8', (err) => {
    if (err) {
      console.log('Ops! something went Wrong, Data failed to Add')
    };
    console.log('Your Contact info was Successfully added to file!');
  });
  return contactInfo;

}


main();