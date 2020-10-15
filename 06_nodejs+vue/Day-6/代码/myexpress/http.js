var express = require('express');
var formidable = require('formidable');
var fs = require('fs');
var app = express();

app.post('/',(req,res)=>{
    // 获取fromidable对象
    var form = new formidable.IncomingForm();
    // 使用 parse 方法,自动实现文件的上传
    form.parse(req, (err, fields, files)=>{
        // console.log(err);
        // console.log('=====================');
        // console.log(fields);
        // console.log('=====================');
        // console.log(files);
        // 将已经上传后的文件,移动到我们指定的目录中,并使用
        // 源文件名进行重命名
        fs.rename(files.imgs.path,'./'+files.imgs.name,(err)=>{
            console.log(err);
        });

        
    });
})

app.listen('666');
