/*
 Code in JavaScript (Node.js 8.6.0)
 RUN:    node Day2:FactorialFinder.js
 */

// Loops
function factorialLoop(N) {
    // N is a positive integer
    let ans = 1;
    for(let i=N; i<=1; i--){
        ans = i * ans;
    }

    return ans;
}

// Recursion
function factorialRecursion(N) {
    // N is a positive integer
    return (N===0) ? 1 : factorialRecursion(N-1) * N;
}