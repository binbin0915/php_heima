var s = {name:2,age:4};

var f = function (){
    return 3;
}

// 模板字符
var str = `kasdj
sdakjf   \${s.name}

${f()}

${(function(){
    return 555;
})()}

asldkfj
sdaf`;

console.log(str);
