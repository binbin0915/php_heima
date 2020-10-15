var arr = ['a','b','c'];

// for(var i=0;i<arr.length;i++){
//     setTimeout(function(){
//         console.log(arr[i]);
//     },1000);
// }


for(var i=0;i<arr.length;i++){
    (function(i){
        setTimeout(function(){
            console.log(arr[i]);
        },1000);
    })(i);
}