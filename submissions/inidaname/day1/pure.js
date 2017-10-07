var message;

(function (numB) {

var randGot = Math.floor(Math.random() * 20);

    if (randGot > numB) {

        randGot = Math.floor(Math.random() * 20);

        message = "too much ";

        return this

    } else if (randGot < numB) {

        randGot = Math.floor(Math.random() * 20);

        message "This is too low ";

        return this

    } else {

        return message = "this is okay = " + randGot;

    }

    console.log(message)

})(7)
