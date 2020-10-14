function Man (){
    this.constructor = Run;
    this.name = '李四';
    this.func = function(){
        console.log(this.name+this.age);
    }
}

var m = new Man();
Run.prototype = m;

// 从此，所有new Run 得到的对象的原型都是 对象m 

function Run(){
    this.age = '34';
}

// 构造函数的 prototype 属性就是默认原型对象
// new的第2步，就是将对象的原型指向 prototype属性的值

// 构造函数的prototype的值就是有new这个构造函数而来的所有对象的原型

var r = new Run();

console.log(r.constructor);

r.func()


// 通过直接修改原型链上的默认指向，达到继承的目的，实现继承
// 原型链继承