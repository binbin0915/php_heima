// 服务器启动模块
var http = require('http');
var url = require('url');
// var luyou = require('./luyou');
// 创建服务
var server = http.createServer();

server.on('request',function(req,res){
    if(req.method == 'POST'){
        // var obj_url = url.parse(req.url,true);
        // console.log(obj_url.query);
        var data = '';
        req.on('data',function(che){
            data+=che;
        })

        req.on('end',function(){
            console.log(data);
        });

    }
    res.end();
})

// 设置服务器的监听端口
server.listen(666,function(){
    console.log('请访问 127.0.0.1:666')
})