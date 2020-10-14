
class Run{
    p(){
        console.log(this.name);
    }
}

class Ha extends Run{
    constructor(){
        // 如果子类需要调用 constructor 构造方法
        // 必须在方法里面先调用一下 super () 来实现父类中的属性和方法
        super();
        this.name = 'lisi';
    }
}

var h = new Ha();

h.p();