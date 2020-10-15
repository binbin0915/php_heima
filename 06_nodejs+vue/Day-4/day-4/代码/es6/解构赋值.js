// 字符串的解构赋值 直接将字符串看做数组
// 字符串中一个字符就是一个数组元素
// const [a,b,c,d] = 'hklj';

// console.log(a);


// var [a] = [1,2,3];

// console.log(a+b+c);

// 数组的解构顺序对应
// var [a,b] = ['hahah','ksjdfk'];

// console.log(a);

// 对象的解构的赋值必须和属性一一对应;
var obj = {name:'lisi','age':23};

var {names,age} = obj;

console.log(names);