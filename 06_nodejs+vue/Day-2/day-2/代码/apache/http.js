var http = require('http');
var fs = require('fs');
var moment = require('moment');

var server = http.createServer();

server.on('request',function(request,response){
    console.log(request.url);
    if(request.url == '/'){
        fs.readFile('./index.html',function(err,data){
            response.end(data);
        })
    }else if(request.url == './file_list'){
        fs.readdir('./','utf8',function(err,data){
            // 我们想要拿到文件的其他属性必须在读取文件之后获取
            // 就是需要我们把获取文件属性的代码写到回调函数里面
            var data_arr = [];
            // 循环获取每个文件的其他属性
            var cont = 0;
            for(var i=0;i<data.length;i++){
                data_arr[i] = {};

                (function(i){
                    fs.stat(data[i],function(err,files){
                        // 因为获取文件属性的代码必须在回调函数中
                        // 所有造成了循环中的I丢失
                        // console.log(files.size);
                        cont++;
                        if(files.isFile()){
                            data_arr[i].type = 'f';
                        }else{
                            data_arr[i].type = 'd';
                        }

                        data_arr[i].name = data[i];
                        data_arr[i].size = files.size;
                        data_arr[i].mtime = moment(files.mtime).format('YYYY-MM-DD hh:mm:ss');
                        // console.log(data[i]);
                        if(cont == data.length){
                            response.end(JSON.stringify(data_arr));
                        }
                    })

                })(i) // 因此我们借助自调用匿名函数形成闭包,保存I变量
                // 回调函数中就可以使用i变量
                
                // data_arr.push(obj);
            }
            // 因为文件的属性都是在回调函数中获取,所以在回调函数外部不能组装数据
            // 循环结束后数据内容依然为空, 因为我们的回调函数在循环结束后才会运行
            // console.log(data_arr);
            // response.end(JSON.stringify(data));
        })
    }else{
        fs.readFile('.'+request.url,function(err,data){
            response.end(data);
        })
    }
   
});

server.listen(8000,function(){
    console.log('请打开浏览器访问:127.0.0.1:8000');
});
