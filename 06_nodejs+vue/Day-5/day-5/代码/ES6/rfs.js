var fs = require('fs');

// fs.readFile('./a.txt','utf8',function(err,data){
//     console.log(data);
// });
// fs.readFile('./b.txt','utf8',function(err,data){
//     console.log(data);
// });

// fs.readFile('./c.txt','utf8',function(err,data){
//     console.log(data);
// });

// 多层回调会进入 "回调地狱"
fs.readFile('./a.txt','utf8',function(err,data){
    console.log(data);
    fs.readFile('./b.txt','utf8',function(err,da2){
        console.log(da2);
        fs.readFile('./c.txt','utf8',function(err,da3){
            console.log(da3);
        })
    })
})



