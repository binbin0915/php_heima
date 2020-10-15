var get = function (callback){
    var a = 1;
    var b = 2;
    callback(a,b);
}






var p = function(a,b){
    console.log(a+b);
}

get(function(a,b){
    p(a,b);
})

get(p);

// var pro = function (a,b){
//     console.log(a+b);
// }

// fun(pro)

// fun(function(a,b){
//     pro(a,b);
// })