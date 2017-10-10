process.stdout.write('Give a number and i will give you the factorial: ');
process.stdin.on('data', function(data) {
    var val = parseInt(data.toString().trim());

    if (isNaN(val)) {
        console.log("Boy common, enter a number");
    } else {
        console.log("The factorial of " + val + " is " + getanswer(val));
        process.exit();
    }
});

function getanswer(num) {
    if (num == 0) {
        return 1;
    }

    return num * getanswer(num - 1);
}