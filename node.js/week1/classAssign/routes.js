const fs = require('fs');

const createServer = (req, res) => {
    const url = req.url;
    const method = req.method;

    if(url === '/') {
        res.write('<html><body>');
        res.write('<h1>Welcome to my first Node.js assignment</h1>');
        res.write('<form action="/firstandlast" method="POST">');
        res.write('<label for="fname">First name:</label>');
        res.write('<input type="text" id="fname" name="fname"><br><br>');
        res.write('<label for="lname">Last name:</label>');
        res.write('<input type="text" id="lname" name="lname"><br><br>');
        res.write('<input type="submit" value="Submit"> ');
        res.write('</form></body></html>');
        return res.end();
    }
    if(url === '/firstandlast' && method === 'POST') {
        var body = "";

        req.on('data', chunk => {
            body += chunk;

        });
        return req.on('end', () => {
            console.log('Body is: ' + body);
            // const parsedBody = Buffer.concat(body).toString();
            // console.log(parsedBody.split('=')[1]);
            res.write('<html><body>');
            res.write('<h1>Welcome ' + body + '</h1>');
            res.write('</form></body></html>');
            return res.end();
        });
        res.statusCode = 302;
        res.setHeader('Location', '/');
        res.end();
    }
}

module.exports = {
    handler: createServer
}