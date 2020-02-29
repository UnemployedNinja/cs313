const http = require('http');

const routes = require('./routes');

console.log(routes.someText);

// function rqListener(req, res) {

// }

// http.createServer(function(req, res) {

// });

//const server = http.createServer(routes);
const server = http.createServer(routes.handler);

server.listen(5000);