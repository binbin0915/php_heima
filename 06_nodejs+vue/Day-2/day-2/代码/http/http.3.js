var http = require('http');
var fs = require('fs');

var server = http.createServer();

server.on('request', function (res, rso) {
    var urls = res.url;
    console.log(urls);
    if (urls == '/') {
        rso.setHeader('Content-type', 'text/html;charset=utf-8');
        fs.readFile('./index.html', 'utf8', function (err, data) {
            rso.end(data);
        })
    }else{
        // 响应一切HTML需要的静态资源
        fs.readFile('.'+urls,function(err,data){
            rso.end(data);
        }) 
    }

});

server.listen(8000, function () {
    console.log('请打开浏览器访问:127.0.0.1:8000');
});
