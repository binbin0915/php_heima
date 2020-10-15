var fs = require('fs');
fs.readdir('./','utf8',function(err,data){
    console.log(data[0]);
    fs.stat(data[0],function(err,data){
        console.log(data);
    });

})

// [
//     {name:'http.js',size:245,mtime:'2018-10-10'},
//     {name:'index.html',size:543,mtime:'2018-09-12'},
// ]