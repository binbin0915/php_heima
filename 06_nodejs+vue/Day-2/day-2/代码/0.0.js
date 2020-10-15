function fun(){
    console.log(this.name);
}

var obj1 = {
    name:'lisi',
    fun:fun,
}

var obj2 = {
    name:'刘能',
    fun:fun,
}

obj1.fun();
obj2.fun();