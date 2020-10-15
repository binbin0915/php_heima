var http = require('http');
var fs = require('fs');

var server = http.createServer();

server.on('request',function(res,rso){
    if(res.method == 'GET'){
        console.log('GET请求');
    }else if(res.method == 'POST'){
        console.log('POST请求');
    }
    rso.setHeader('Content-type','text/html;charset=utf-8');
    fs.readFile('./index.html','utf8',function(err,data){
        rso.end(data);
    })
    
});

server.listen(8000,function(){
    console.log('请打开浏览器访问:127.0.0.1:8000');
});
