var http = require('http');

var server = http.createServer();

server.on('request',function(res,rso){
    if(res.method == 'GET'){
        console.log('GET请求');
    }else if(res.method == 'POST'){
        console.log('POST请求');
    }
    rso.end();
});

server.listen(8000,function(){
    console.log('请打开浏览器访问:127.0.0.1:8000');
});
