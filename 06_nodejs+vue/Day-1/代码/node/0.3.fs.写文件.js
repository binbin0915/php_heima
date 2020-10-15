var fs = require('fs');

// fs.readFile('./tt.txt','utf8',function(err,data){
//     console.log(err);
//     console.log('---------------');
//     console.log(data);
// });

fs.writeFile('./tt.txt','班主任最美',function(err){
    if(!err){
        console.log('写入成功');
    }
});


