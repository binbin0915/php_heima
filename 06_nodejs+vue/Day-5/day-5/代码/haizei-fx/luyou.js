var fs = require('fs');
var yewu = require('./yewu');
var url = require('url');

// 导出数据(binds方法)
// binds方法设置监听
module.exports.binds = function (server) {
    // 当客户端发送请求到服务器时,触发事件
    server.on('request', function (request, response) {
        // 解析URL为一个对象 对象中有请求路径及参数
        var urlObj = url.parse(request.url,true);
        // console.log(urlObj);
        var method = request.method;
        if (method == 'GET') {
            // console.log(urls);
            // 获取请求路径,判断路径请求,
            if (urlObj.pathname == '/') {
                yewu.getall(request,response);
                
            } else if (urlObj.pathname == '/getone') {
                yewu.getone(request,response);
            }else if(urlObj.pathname == '/upuser'){
                yewu.upuser_get(request,response);
            }else if(urlObj.pathname == '/delete'){
                yewu.delete_user(request,response);
            } else {
                // 接收静态资源请求并按照请求路径响应
                fs.readFile('.' + urlObj.pathname, function (err, data) {
                    response.end(data);
                });
            }
        }else if(method == 'POST'){
            if(urlObj.pathname == '/upuser'){
                yewu.upuser_post(request,response);
            }
            // console.log(urls);
            // response.end('POST');
        }else{
            response.end('抱歉,不支持'+method+'请求');
        }


    })
}