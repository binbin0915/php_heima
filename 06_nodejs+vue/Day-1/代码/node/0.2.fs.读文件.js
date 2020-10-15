var fs = require('fs');

fs.readFile('./tt.txt','utf8',function(err,data){
    console.log(err);
    console.log('---------------');
    console.log(data);
});

console.log(111);