// var o1 = {};
// var o1 = new Object();

// function Fun1(){
// }
// var o2 = new Fun1();

class Man {
    // 类中的构造方法
    // 类一旦new 会自动调用
    // constructor(){
    //     this.xx = '12';
    //     this.yy = 'asdf';
    // }

    // 类中的构造方法，不管写不写，类在new是都会被调用
    // 默认在构造方法中返回this

    constructor(){
        this.xx = '12';
        this.yy = 'asdf';
    
        return {funs:this.funs};
    }

    // 使用class 声明类后得到对象
    // 在类中 要么不声明  constructor 方法
    // 如果声明了，不要返回值，如果有返回值只能返回this
    // 不声明或者声明了不返回，默认返回this


    // 方法的声明
    funs(){
        console.log(this.xx);
        console.log(123);
    }
}

var o3 = new Man();
o3.funs();
