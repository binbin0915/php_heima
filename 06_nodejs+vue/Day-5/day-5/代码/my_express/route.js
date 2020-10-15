var express = require('express');
// 调用路由方法,获取路由对象
var router = express.Router();


// 设置各种请求方式的路由
router.get('/',(req,res)=>{
    res.end('123');
});
router.post('/',(req,res)=>{
    res.end('post');
});

module.exports = router;

