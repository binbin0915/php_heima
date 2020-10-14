
var h = new Han();
h.fun();


console.log(9999);


// 变量和函数及构造函数都是有变量提升的
// 因此可以看起来是先使用后声明
function Han(){
    this.fun=function(){
        console.log(123);
    }
}


// var c = new Hm();
// c.fun();

// // class 声明的类没有提升的
// // 因此在调用之前必须先声明
// class Hm{
//     fun(){
//         console.log(456);
//     }
// }

