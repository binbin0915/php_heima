"use strict";


var o = {name:'123',age:345};
// 使用对象获取原型的时候 
// o.construct.prototype
// o.__proto__   // 此属性在ES5以后只在浏览器环境中部署,其他不在拥有此属性
// Object.getPrototypeOf(o);
// delete o.construct;
console.log(o);


// function f(a,b,a){
//     console.log(a);
// }

// f(1,2,3);

// a = 2;
// console.log(a);

// 不准为只读属性重新赋值,否则报错
// var a = '123';
// // 不使用严格模式,赋值不成功,但是不会报错
// a.length = 4;
// console.log(a.length)