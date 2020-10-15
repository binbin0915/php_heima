var fs = require('fs');

var p1 = new Promise(function(res,rej){
    fs.readFile('./a.txt','utf8',function(err,data){
        if(err){
            rej(err);
        }else{
            res(data)
        }
    })
});

p1.then(function(data){
    console.log(data);
},function(err){
    console.log(err);
})



