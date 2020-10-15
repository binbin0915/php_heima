// var foo = 'hhhhh';
// var b = {foo};
// // 使用一个{}讲一个已经赋值的变量括起来
// // 就相当于是给一个对象添加一个 变量名为名字的属性
// // 及一个变量值为值的属性值

// var b = {foo:'hhhh'};
// console.log(b);

// 先解构赋值
// var [a,b,c] = [1,2,3];

// // 在使用{} 创建相应的对象
// var o = {a, b,c};
// console.log(o);


// 对象中属性的简写

// function fun (){
//     console.log(this.a+this.b);
// }



// var obj = {
//     a:1,
//     b:2,
//     fun
// }

// obj.fun();


// var f = function(){console.log(1)};
// var a = 1;

// var obj = {f,a};

// obj.f();

var getone = function(){

}
var getall = function(){

}
// 属性及方法的简写方式用在nodejs中的模块化导出,极其漂亮
module.exports = {getall,getone};



