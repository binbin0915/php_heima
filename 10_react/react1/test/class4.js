function Man (){
    this.name = '李四';
    this.func = function(){
        console.log(this.name+this.age);
    }
}

function Run(){
    // 冒充继承 (假的)
    Man.call(this);
    this.age = '34';
}

var r = new Run();
r.func()
