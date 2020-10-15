var fun = function (f){
    var s = 1;
    f(s);
}

fun(function(d){
    console.log(d);
})
