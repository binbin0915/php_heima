// var fun1 = function(s1,s2){
//     return s1+s2;
// }

// // ES6中新函数的的声明方式
// // 箭头函数
// var fun2 = (s1,s2)=>{
//     return s1+s2;
// }

// var fun3 = (s1,s2)=> s1+s2;

// console.log(fun1(1,2));
// console.log(fun2(1,2));
// console.log(fun3(1,2));


// var f = ()=>{

// }

// var f = (s) => {
//     var a = 1;
//     var b = s+a;
//     return b;
// }

// f(3);

// var obj1 = {
//     name:'lisi',
//     fun:function(){
//         console.log(this.name);
//     }
// }
// obj1.fun();

// var obj2 = {
//     name:'刘能',
//     fun:obj1.fun,
// }
// obj2.fun();

var name = 1;
var obj1 = {
    name:'lisi',
    fun:()=>{
        // console.log(this.name);
        console.log(this);
    }
}
obj1.fun();

// var obj2 = {
//     name:'刘能',
//     fun:obj1.fun,
// }
// obj2.fun();








