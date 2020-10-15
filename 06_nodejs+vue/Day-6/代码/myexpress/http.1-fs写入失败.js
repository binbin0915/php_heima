var express = require('express');
// var fs = require('fs');
var app = express();

app.post('/',(req,res)=>{
    var data = '';
    req.on('data',function(che){
        data+=che;
    })
    req.on('end',()=>{
        // fs.writeFile('./a.txt',data,(err)=>{
        //     console.log(err);
        // });
    })
})

app.listen('666');
