function Fun(){
    this.name = 'lis';
    this.age= 122;
    this.ff = function(){
        console.log(this.name+this.age);
    }
}

var obj_fun = new Fun();