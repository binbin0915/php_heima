var http = require('http');

var server = http.createServer();

server.on('request',function(res,rso){
    if(res.method == 'GET'){
        console.log('GET请求');
    }else if(res.method == 'POST'){
        console.log('POST请求');
    }
    rso.setHeader('Content-type','text/html;charset=utf-8');
    // rso.write('hhhhh');
    // rso.write('eeeee');
    // rso.write('西岭太帅了!');
    // rso.write('yyyyyy');
    rso.end('slkdajflksa拉<h1>开始的减肥</h1>');
});

server.listen(8000,function(){
    console.log('请打开浏览器访问:127.0.0.1:8000');
});
