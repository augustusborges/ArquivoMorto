var http = require('http');
var dt = require('./myfirstmodule');

http.createServer(function (req, res) {
  res.writeHead(200, {'Content-Type': 'text/html'});
  res.write('<h1>Hello World Alexandre!</h1>');
  res.write("The date and time are currently: " + dt.myDateTime());
  res.end(dt.meuExemploExclusivo());

}).listen(3030);