// 服务器启动模块
const http = require('http');
var luyou = require('./luyou');
// 创建服务
var server = http.createServer();

// 调用luyou模块中的binds方法,设置监听事件
luyou.binds(server);

// 设置服务器的监听端口
server.listen(8080,function(){
    console.log('请访问 127.0.0.1:8080')
})