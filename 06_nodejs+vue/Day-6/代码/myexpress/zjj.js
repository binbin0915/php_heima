var express = require('express');
var app = express();


// 路由中间件
// app.get('/',(req,res,next)=>{
//     console.log(2222);
//     // next();
// })

// app.use(function(req,res,next){
//     console.log(111);
//     res.send();
// });


// 路由中间件

app.post('/',(res,req,next)=>{
    console.log(111);
    // next();
})

app.get('/',(req,res,next)=>{
    console.log(2222);
    res.send();
    next();
})

app.all('/',(req,res)=>{
    console.log(444);
})




app.listen(777);
