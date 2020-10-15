const express = require('express');

const app = express();

// 导入 外置路由
var router = require('./route');
// 引用外置路由
app.use(router);

app.listen(666,function(){
    console.log('请求访问 127.0.0.1:666')
});
