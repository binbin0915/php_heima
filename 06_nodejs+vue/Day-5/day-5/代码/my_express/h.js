const express = require('express');

const app = express();

app.get('/',function(req,res){
    res.send('hello world');
})

app.listen(666,function(){
    console.log('请求访问 127.0.0.1:666')
});

