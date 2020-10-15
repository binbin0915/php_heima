var fs = require('fs');
var yewu = require('./yewu');
// 导出数据(binds方法)
// binds方法设置监听
module.exports.binds = function(server){
    server.on('request',function(request,response){
        var urls = request.url;
        // 获取请求路径,判断路径请求,
        if(urls == '/'){
            // 调用yewu模块获取data
            var yemian = yewu.data;
            response.end(yemian);
        }else{
            // 接收静态资源请求并按照请求路径响应
            fs.readFile('.'+urls,function(err,data){
                response.end(data);
            });
        }
    })
}