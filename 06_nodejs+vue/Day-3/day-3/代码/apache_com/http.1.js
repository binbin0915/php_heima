var http = require('http');
var fs = require('fs');
var moment = require('moment');
var template = require('art-template');
template.defaults.root = './';

var server = http.createServer();

server.on('request',function(request,response){
    console.log(request.url);
    if(request.url == '/'){

        fs.readdir('./','utf8',function(err,data){
            
            var data_arr = [];
            // 循环获取每个文件的其他属性
            var cont = 0;
            for(var i=0;i<data.length;i++){
                data_arr[i] = {};

                (function(i){
                    fs.stat(data[i],function(err,files){
                        
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

                            var htmls = template('./index.html',{data:data_arr});
                            response.end(htmls);
                            // response.end(JSON.stringify(data_arr));
                        }
                    })

                })(i) 
            }
           
        })

    }else if(request.url == '/file_list'){
        fs.readdir('./','utf8',function(err,data){
            var data_arr = [];
            var cont = 0;
            for(var i=0;i<data.length;i++){
                data_arr[i] = {};

                (function(i){
                    fs.stat(data[i],function(err,files){
                       
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
