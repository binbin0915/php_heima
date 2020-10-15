var fs = require('fs');

function fun(files){
    return new Promise(function(succ,err){
        fs.readFile(files,'utf8',function(err,data){
            succ(data);
        })
    });
}

fun('./a.txt')
.then(function(data){
    console.log(data);
    return(fun('./b.txt'));
})
.then(function(data){
    console.log(data);
    return(fun('./c.txt'));
})
.then(function(data){
    console.log(data);
})