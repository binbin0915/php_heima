var fs = require('fs');

fs.readFile('./tt.txt','utf8',function(err,data){
    data += ', 大实话';
    fs.writeFile('./tt.txt',data,function(err){
        if(!err){
            console.log('追加成功');
        }
    })
})



