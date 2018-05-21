require('dotenv').config();
var nodemailer = require('nodemailer');

process.stdout.write(`\n
----------------------------------------------------------------------------

Welcome to the Email Application.Follow the instructions below to Send your mail.
Enter Your information in this sequence
senderEmail-receiverEmail-Subject-bodyOfMail.

Example : 

Enter in Email Content : Akinkunmi007@gmail.com - akinkunmi007@gmail.com - Testing App - Yo bro, you are Awesome!

----------------------------------------------------------------------------

Enter in Email Content : `);

process.stdin.on('data', function (data) {
  let response = data.toString().trim();
  let status = mailSender(response);
  // process.exit();
});

function mailSender(details) {
  let info = details.split('-');
  let addressDetails = [];
  info.forEach(function (element) {
    let detail = element.trim();
    addressDetails.push(detail);
  });


  var transporter = nodemailer.createTransport("SMTP",{
    service: 'gmail',
    auth: {
      user: process.env.email,
      pass: process.env.password
    }
  });

  var mailOptions = {
    from: addressDetails[0],
    to: addressDetails[1],
    subject: addressDetails[2],
    text: addressDetails[3]
  };

  transporter.sendMail(mailOptions, function (error, info) {
    if (error) {
      console.log(error);
    } else {
      console.log('Email sent: ' + info.response);
    }
  });
}