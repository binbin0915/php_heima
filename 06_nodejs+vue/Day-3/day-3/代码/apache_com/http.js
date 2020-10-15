var http = require('http');
var luyou = require('./luyou');
var server = http.createServer();

luyou.server(server);

server.listen(8000,function(){
    console.log('请打开浏览器访问:127.0.0.1:8000');
});
