const express = require('express');
const yewu = require('./yewu');
const app = express();

// 设置静态资源所在路径
// 后续无需任何操作即可使用
app.use(express.static('public'))

// 引入模板引擎,设置模板引擎加载资源的额后缀名
app.engine('html',require('express-art-template'));

var router = require('./luyou');
app.use(router);

app.listen(8888,function(){
    console.log('请求访问 127.0.0.1:8888')
})