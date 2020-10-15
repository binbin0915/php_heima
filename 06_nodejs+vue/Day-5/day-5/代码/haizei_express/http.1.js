const express = require('express');
const yewu = require('./yewu');
const app = express();

// 设置get请求的监听
// 使用箭头函数做get请求事件的回调函数
app.get('/',(req,res)=>{
    yewu.getall(req,res);
})

// express的内置路由:
// app.method(url,fun);

app.get('/getone',(req,res)=>{
    yewu.getone(req,res);
})

app.listen(8888,function(){
    console.log('请求访问 127.0.0.1:8888')
})