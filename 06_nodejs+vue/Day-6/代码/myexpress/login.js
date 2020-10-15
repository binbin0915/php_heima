var express = require('express');
var app = express();
// express 4.0 之前的版本中,有操作cookiesession等相关功能
// 从4.0 开始, 移除了类似的功能,以第三方模块的形式,使用中间进行载入使用
// cookie-session

var cs = require('cookie-session');
// var cs_obj = {
    
// };
// var ccss = cs(cs_obj);

app.use(cs({
    name:'xilingzuishuai',
    keys:['xilingzuishuai'],
}));


app.get('/',(req,res)=>{
    if(req.session.session_data){
        res.send('已经登录')
    }else{
        res.send('没有登录')
    }
})

app.get('/uplogin',(req,res)=>{
    // 1:获取用户提交的数据
    // 2: 链接数据库查询此用户,如果有就是正确登录

    var userinfo = {name:'admin',pwd:'123'};
    req.session.session_data = userinfo;
    res.send('session写入成功');

})

app.listen(666);