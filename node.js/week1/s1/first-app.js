/*
 * My first app 
 */

console.log("Hello from Node.js");

const fs = require('fs');

fs.writeFileSync('hello.txt', "Hello from Node.js");
fs.writeFileSync('hello.txt', "Seccond line");